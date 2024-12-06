# Implement a basic algorithm (e.g., finding the minimum of three numbers) in your chosen programming language (e.g., Python, Java, C++).
def findSmallestNumber(n1, n2, n3):
    if n1 < n2 and n1 < n3:
        print(n1)
    elif n2 < n1 and n2 <n3:
        print(n2)
    elif n3 < n1 and n3 < n2:
        print(n3)
    else:
        print("They are equal numbers")
        
findSmallestNumber(2, 4, 6)
findSmallestNumber(2, 1, 6)
findSmallestNumber(2, 2, 2)