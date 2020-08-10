from tkinter import *
a=Tk()
a.title("my first window ")
a.geometry("1920x1080+500+500")
l=Label(text='labale1',fg='red',bg='yellow',font=20)
l1=Label(text='labale2',fg='red',bg='green',font=20)
l1.pack()
l.pack()
a.mainloop()