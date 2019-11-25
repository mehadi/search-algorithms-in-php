# Linear Search
 

## How it works

 ```bash
-Start from the leftmost element of arr[] and one by one compare x with each element of arr[]
-If x matches with an element, return the index.
-If x doesn’t match with any of elements, return -1.
```

# Binary Search
 

## How it works

 ```bash
- We basically ignore half of the elements just after one comparison.

- Compare x with the middle element.
- If x matches with middle element, we return the mid index.
- Else If x is greater than the mid element, then x can only lie in right half subarray after the mid element. So we recur for right half.
- Else (x is smaller) recur for the left half.
```
