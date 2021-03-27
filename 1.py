import random
import string

def cetak(jumlah):
    for i in range(jumlah):
        # string ascii_lovercase berisi string a-z dan string digit berisi string 0-9 argumen k=28 adalah panjang karakter
        print(''.join(random.choices(string.ascii_lowercase + string.digits, k=28)))

cetak(3)