# social-forum
social forum unspecified

Example Responses:

GET /api/v1/threads

{
  "status": "success",
  "count": 10,
  "data": [
    {
      "thread_id": 10,
      "thread_content": "Life is better when we share ideas. Cheers to more connections! 🥂",
      "thread_date": "2025-10-25 01:37:21"
    }
  ]
}


GET /api/v1/threads/2

{
  "status": "success",
  "data": {
    "thread_id": 2,
    "thread_content": "Who else loves the new Sabitalk layout?",
    "thread_date": "2025-10-25 01:37:21"
  }
}
