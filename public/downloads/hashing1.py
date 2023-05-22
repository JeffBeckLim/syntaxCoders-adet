import struct
def charToAscii(list): #converts char in a list to ascii
    char_list=[]
    for i in range(len(digest_list)):
        char = ord(digest_list[i])
        char_list.append(char)
        char_list[i] *= len(digest)   #adds to the ascii value depending on the PASSWORD string length
    print(char_list)
    return(char_list)

def charToHex(list):  #converts char in a list to hexadecimal  
    hexa_list = []
    for x in range(len(char_list)):
        hexa=hex(char_list[x])
        hexa_list.append(hexa)
    print(hexa_list)
    return(hexa_list)

def string_to_16bytes(string): #convert to 16 bytes
    packed = struct.pack("16s", string.encode())
    return packed[:16]

######################### FUNCTIONS ######################################

digest =input("enter value>  ")

digest_list = list(digest) #convert string to list (each character)

print(digest_list)

char_list=[]  
char_list= charToAscii(digest_list) #convert each char in list to ascii

hexa_list = []
hexa_list = charToHex(char_list) #convert each cahr in ascii list to hexadecimal values

hashed =''.join(hexa_list) #join the list into one string

hashed= string_to_16bytes(hashed) #convert the string to 16 bytes
print("HASHED VALUE: " + str(hashed)) #print hashed value with cast because bytes cannot be concatinated
 



