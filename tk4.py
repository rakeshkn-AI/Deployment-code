from tkinter import *
a=Tk()
def hello():
    c=Label(text='you have pressed enter',fg='red',bg='yellow',font=20).pack()
def delete():
        d = Label(text='you have pressed delete', fg='red', bg='yellow', font=20).pack()
a.title("my first window ")
a.geometry("1920x1080+500+500")
l=Label(text='labale1',fg='red',bg='yellow',font=20).pack()
#l1=Label(text='labale2',fg='red',bg='green',font=20).pack()
button1=Button(text='enter',fg='red',bg='yellow',command=hello,font=20).pack()
button2=Button(text='delete',fg='red',bg='yellow',command=hello,font=20).pack()
a.mainloop()