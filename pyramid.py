n = 0
r = 6
for m in range(1, r+1):
   for gap in range(1, (r-m)+1):
      print(end=" ")
   while n != (2 *m-1):
      print("1 ", end="")
      n = n + 1
   n = 0
   print()