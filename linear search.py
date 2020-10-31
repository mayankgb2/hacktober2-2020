# https://l.facebook.com/l.php?u=https%3A%2F%2Fyoutu.be%2Fx084tfX4JnI&h=AT0mPYjbOUhitYUTUUT-R02jW2aF0JGu4r-FlsChO2V6yUvzXWzcJUwbqd5bPny_8m7Ntt9fFgRwOY8N6iz1VZckD4ioW4wJ8E2wzbsbtcLuH5W9tPmNwjF6txLIlE98nhys&s=1
# subscribed by : NAVEEN YADAV
# Searching an element in a list/array in python 
# can be simply done using \'in\' operator 
# Example: 
# if x in arr: 
# print arr.index(x) 

# If you want to implement Linear Search in python 

# Linearly search x in arr[] 
# If x is present then return its location 
# else return -1 

def search(arr, x): 

	for i in range(len(arr)): 

		if arr[i] == x: 
			return i 

	return -1
