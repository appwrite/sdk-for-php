# Embeddings Service


```http request
POST https://cloud.appwrite.io/v1/embeddings/text
```

** Generate vector embeddings for an array of text using the selected embedding model. Use the returned vectors to power semantic search and similarity queries against your vector collections.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| texts | array | Array of text to generate embeddings. |  |
| model | string | The embedding model to use for generating vector embeddings. | nomic-embed-text |

