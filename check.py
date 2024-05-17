import sys
import json
from aylienapiclient import textapi
client = textapi.Client("xxxxec29", "xxxxxxxxxxxxxxxx0b50fdc435367e4ac")
#print sys.argv[1]
sentiment = client.Sentiment({'text': sys.argv[1]})
#sentiment = client.Sentiment({'text': 'I hate you, but I love you'})
print(json.dumps(sentiment, indent=2))
