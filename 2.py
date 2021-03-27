from string import digits

def urut_kata(kata):
    urutan = []
    digit = list(digits)
    _split_kata = kata.split(' ')
    for i in digits:
        for perkata in _split_kata:
            for perchar in perkata:
                if perchar == i:
                    urutan.append(perkata)

    print(' '.join(urutan))

urut_kata("ta3hun menjela2ng se1lamat b4aru ")