#!/usr/bin/env python3

import time, os

def iproc():
    i=1
    while i<9:
#        dat=os.system('pwd')
        print("i={}__{}".format(i,os.system('pwd')))
        time.sleep(0.9); i+=1


iproc()
