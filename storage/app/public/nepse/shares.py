import urllib.request
import pandas as pd
import json

todays_price = "http://www.nepalstock.com/todaysprice/export"

def fetch_todays_share():
	""" 
	Download the todays share data, process it and 
	save it into html and json file. 
	"""
	try:
		urllib.request.urlretrieve(todays_price, "todays_share.html")
		
		df_list = pd.read_html('todays_share.html')
		df = df_list[0].dropna(axis=0, thresh=4)
		todaysprice_json = df.to_json(orient="records")


		with open('todayshare.json', 'w') as f:
		    json.dump(json.loads(todaysprice_json), f)
	except Exception as e:
		print('Could not dump todaysprice json. Exception : {}'.format(e))

if __name__ == "__main__":
	fetch_todays_share()