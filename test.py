from imutils import contours
import imutils
import cv2
from google.colab.patches import cv2_imshow
import numpy as np

DIGITS_LOOKUP = {
    (1, 1, 1, 0, 1, 1, 1): 0,
    (0, 0, 1, 0, 0, 1, 0): 1,
    (1, 0, 1, 1, 1, 0, 1): 2,
    (1, 0, 1, 1, 0, 1, 1): 3,
    (0, 1, 1, 1, 0, 1, 0): 4,
    (1, 1, 0, 1, 0, 1, 1): 5,
    (1, 1, 0, 1, 1, 1, 1): 6,
    (1, 0, 1, 0, 0, 1, 0): 7,
    (1, 1, 1, 1, 1, 1, 1): 8,
    (1, 1, 1, 1, 0, 1, 1): 9
}
image_path = "b4.jpg"
image = cv2.imread(image_path)
cv2_imshow(image)
gray = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)
thresh = cv2.threshold(
    gray, 0, 255, cv2.THRESH_BINARY_INV | cv2.THRESH_OTSU)[1]
kernel = cv2.getStructuringElement(cv2.MORPH_ELLIPSE, (1, 5))
thresh = cv2.morphologyEx(thresh, cv2.MORPH_OPEN, kernel)
cv2_imshow(thresh)
kernel = np.ones((5, 5), np.uint8)
dilation = cv2.dilate(thresh, kernel, iterations=1)
erosion = cv2.erode(dilation, kernel, iterations=1)
cv2_imshow(erosion)
erosion = imutils.rotate_bound(erosion, -6)
cv2_imshow(erosion)
cnts = cv2.findContours(
    erosion.copy(), cv2.RETR_EXTERNAL, cv2.CHAIN_APPROX_SIMPLE)
cnts = imutils.grab_contours(cnts)
digitCnts = []
image_w_bbox = image.copy()
image_w_bbox = imutils.rotate_bound(image_w_bbox, -6)
for c in cnts:
    (x, y, w, h) = cv2.boundingRect(c)
    if w >= 10 and (h >= 130 and h <= 170):
        digitCnts.append(c)
        image_w_bbox = cv2.rectangle(
            image_w_bbox, (x, y), (x+w, y+h), (0, 255, 0), 2)
cv2_imshow(image_w_bbox)
digitCnts = contours.sort_contours(digitCnts,	method="left-to-right")[0]
# len(digitCnts) # to check how many digits have been recognized

digits = []
# loop over each of the digits
for c in digitCnts:
    # extract the digit ROI
    (x, y, w, h) = cv2.boundingRect(c)
    if w < 35:  # it turns out we can recognize number 1 based on the ROI width
        digits.append(1)
    else:  # for digits othan than the number 1
        roi = erosion[y:y + h, x:x + w]
        # compute the width and height of each of the 7 segments we are going to examine
        (roiH, roiW) = roi.shape
        (dW, dH) = (int(roiW * 0.25), int(roiH * 0.15))
        dHC = int(roiH * 0.05)
        # define the set of 7 segments
        segments = [
            ((0, 0), (w, dH)),  # top
            ((0, 0), (dW, h // 2)),  # top-left
            ((w - dW, 0), (w, h // 2)),  # top-right
            ((0, (h // 2) - dHC), (w, (h // 2) + dHC)),  # center
            ((0, h // 2), (dW, h)),  # bottom-left
            ((w - dW, h // 2), (w, h)),  # bottom-right
            ((0, h - dH), (w, h))  # bottom
        ]
        on = [0] * len(segments)
        for (i, ((xA, yA), (xB, yB))) in enumerate(segments):
            segROI = roi[yA:yB, xA:xB]
            total = cv2.countNonZero(segROI)
            area = (xB - xA) * (yB - yA)
            if total / float(area) > 0.4:
                on[i] = 1
        digit = DIGITS_LOOKUP[tuple(on)]
        digits.append(digit)
print("Here are the digits from left to right...")
print(digits)
