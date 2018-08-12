# Classroom API


## Authentication

### 1. Login
__Endpoint__
```
POST /oauth/token
```

__Sample Request__
```json
{
	"grant_type" : "password",
	"client_id" : 2,
	"client_secret" : "cxy6sfCgT07TCVB699bcoknrQsLI2RbgkJHtIbud",
	"username" : "johndoe@mail.com",
	"password" : "123456",
	"scope" : ""
}
```

__Sample Response__

Use `access_token` for other requests as `Authorization header` with format: `Bearer: {access_token}`
```json
{
    "token_type": "Bearer",
    "expires_in": 31535999,
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjgxMmEyYzA0MjMyYTM5NDVkODJkYThlYjhjOTg5ZjVhYjQyNDRlMjMxMjZmMjA4YThkYWY3ZGU5ZmMwYzlhNTk2ODk1ZTExY2NlNzg3Mjk1In0.eyJhdWQiOiIyIiwianRpIjoiODEyYTJjMDQyMzJhMzk0NWQ4MmRhOGViOGM5ODlmNWFiNDI0NGUyMzEyNmYyMDhhOGRhZjdkZTlmYzBjOWE1OTY4OTVlMTFjY2U3ODcyOTUiLCJpYXQiOjE1MzM3NTkwNzEsIm5iZiI6MTUzMzc1OTA3MSwiZXhwIjoxNTY1Mjk1MDcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.H2M2NylnC66Mt8nI-_WeRWAsRnbrO2Va0lSl3MMVMjL4h3HslRCt6JGTHUL9-N3M9BDuSepuzoawe6kZs0IrBr7pJiSBqW1csK4bTLrXWYjNIzNvUbSEdoUeQIVFzatPRyb6bna5jHAj3xZ4cWI8kr-3a3TlALpdQhURpv6x2pImVsqWgl0nmil_xmFVuX4cWbz8j3Yfyl1qvtiF2UlMmmMtu9l8n5a9mM9pAmXZQ8gKWmBJTYLh94hpnEyexh8Gut-uN89WSx38oyttebPZX5MTR07cGKm_KWlGSABQDcAjQi5mXtA2WwKRF-FvrOhxHI5mfjqTyjP4Z_ytCa01X68eP68ebAXnIT9BeYwpmQjA6e7DNmtPep5i7ZoedTH3rGB6katXNr1EawwoqefnPZSzfxop0_9uz0dsWBuM621msG55G-76umVfYzv7Rvhw6Nk-Zc1jnl3sTNe7xYyfCsSE2413HutesouY7impkDsfx2THJErCvdX2NVOLff761HNZc3rkj-GyynrCPhX3iFcHoaMX7UoCxPUZ286H0KtB1qwWSss_844j5ukrTBi2OjGWEPefOk0QBTP1FnArETySBU-IBqhywWmpM0sDL3yGLGYUVCgUGpZyLEl73x33TRIe4LeX64d56jOIK42tn3UkkhxzO8en_P7_L7ryk94",
    "refresh_token": "def50200179dace48155ce5d26d494398e940c56acd7103ab3b4b295ac4c27cda696c8a376767b952c051e36bda29f32b3d17e5e7b35d9f9df78ab366a174caa9bb9c0c8510a9b06d529b94f65843bc6f368ebe875c52ff3dace61c2f1cd1b6aa2e1840d60f0ec1aad99954a5e75418fd13082438b1e512ba80dfa3ee9169d50e06c095f7081bc270538d4258097541801534b5318e09e1574a7c7f894d22eadbadcfd460966535736c95ac27e8ecc9a8d832f80b1f715c8ab148601b9df9bc8f4dd782dcb5b901240c40b6e53c982b6391df0a38b3c513ff3c34f6b52fcf44cea924eeb37a3cf6a05846df87c5f3ff06452c6c88a0233ea036ae267315bf4e7d509fbfb28333ab613c6f259df8dbfdf25df207bd8ad6f5b4cf16c28bf11878e1fa5a28eaa1341b0a0b8d4cddb352fda7198a474f8fd7c4afc7971aaa7f20123cdf568580bb751ba9bfe3306e53950ac98658afc7b476f378a37a2e7b1e93fcd7d"
}
```

### 2. Get User
__Endpoint__

```
GET /api/me
```

__Sample Response__
```json
{
    "id": 1,
    "name": "John Doe",
    "email": "johndoe@mail.com",
    "user_type": "teacher",
    "created_at": "2018-08-08 16:24:10",
    "updated_at": "2018-08-08 16:24:10"
}
```

## Teacher
### Lectures
#### 1. Get Lectures

__Endpoint__
```
GET /api/teacher/lectures
```

__Sample Reponse__
```json

```

### Quizzes
### 1. Get Quizzes

__Endpoint__
```
GET /api/teacher/quizzes
```

__Sample Response__
```json
{
    "current_page": 1,
    "data": [
        {
            "id": 1,
            "teacher_id": 1,
            "title": "Test quiz 1",
            "time_limit": 60,
            "quiz_date": "2018-08-08 00:00:00",
            "created_at": "2018-08-08 16:24:10",
            "updated_at": "2018-08-08 16:24:10"
        }
    ],
    "first_page_url": "http://127.0.0.1:8000/api/teacher/quizzes?page=1",
    "from": 1,
    "last_page": 1,
    "last_page_url": "http://127.0.0.1:8000/api/teacher/quizzes?page=1",
    "next_page_url": null,
    "path": "http://127.0.0.1:8000/api/teacher/quizzes",
    "per_page": 15,
    "prev_page_url": null,
    "to": 1,
    "total": 1
}
```

### 2. Get Quiz
__Endpoint__
```
GET /api/teacher/quizzes/{quiz}
```

__Sample Response__
```json
{
    "data": [
        {
            "id": 1,
            "teacher_id": 1,
            "title": "Test quiz 1",
            "time_limit": 60,
            "quiz_date": "2018-08-10 00:00:00",
            "created_at": "2018-08-10 02:17:44",
            "updated_at": "2018-08-10 02:17:44",
            "questions": [
                {
                    "id": 1,
                    "quiz_id": 1,
                    "question": "Question 1",
                    "choices": {
                        "a": "choice 1",
                        "b": "choice 2",
                        "c": "choice 3",
                        "d": "choice 4"
                    },
                    "answer": "a",
                    "created_at": "2018-08-10 02:17:44",
                    "updated_at": "2018-08-10 02:17:44"
                },
                {
                    "id": 2,
                    "quiz_id": 1,
                    "question": "Question 2",
                    "choices": {
                        "a": "choice 1",
                        "b": "choice 2",
                        "c": "choice 3",
                        "d": "choice 4"
                    },
                    "answer": "b",
                    "created_at": "2018-08-10 02:17:44",
                    "updated_at": "2018-08-10 02:17:44"
                },
                {
                    "id": 3,
                    "quiz_id": 1,
                    "question": "Question 3",
                    "choices": {
                        "a": "choice 1",
                        "b": "choice 2",
                        "c": "choice 3",
                        "d": "choice 4"
                    },
                    "answer": "a",
                    "created_at": "2018-08-10 02:17:44",
                    "updated_at": "2018-08-10 02:17:44"
                }
            ]
        },
        {
            "id": 2,
            "teacher_id": 1,
            "title": "Second Quiz",
            "time_limit": 45,
            "quiz_date": "2018-08-10 00:00:00",
            "created_at": "2018-08-10 02:54:55",
            "updated_at": "2018-08-10 02:54:55",
            "questions": [
                {
                    "id": 4,
                    "quiz_id": 2,
                    "question": "Sample question 1",
                    "choices": [
                        {
                            "a": "t32131est choice"
                        },
                        {
                            "b": "tes232t cfdfdhoice"
                        },
                        {
                            "c": "test choice"
                        },
                        {
                            "d": "test"
                        }
                    ],
                    "answer": "a",
                    "created_at": "2018-08-10 02:54:55",
                    "updated_at": "2018-08-10 02:54:55"
                },
                {
                    "id": 5,
                    "quiz_id": 2,
                    "question": "Sample question 2",
                    "choices": [
                        {
                            "a": "t32131est choice"
                        },
                        {
                            "b": "tes232t cfdfdhoice"
                        },
                        {
                            "c": "test choice"
                        },
                        {
                            "d": "test"
                        }
                    ],
                    "answer": "a",
                    "created_at": "2018-08-10 02:54:55",
                    "updated_at": "2018-08-10 02:54:55"
                },
                {
                    "id": 6,
                    "quiz_id": 2,
                    "question": "Question 3",
                    "choices": [
                        {
                            "a": "test choice"
                        },
                        {
                            "b": "Answer B"
                        },
                        {
                            "c": "C"
                        },
                        {
                            "d": "eDi wow"
                        }
                    ],
                    "answer": "c",
                    "created_at": "2018-08-10 02:54:55",
                    "updated_at": "2018-08-10 02:54:55"
                }
            ]
        },
        {
            "id": 3,
            "teacher_id": 1,
            "title": "third Quiz",
            "time_limit": 15,
            "quiz_date": "2018-08-10 00:00:00",
            "created_at": "2018-08-10 03:31:25",
            "updated_at": "2018-08-10 03:31:25",
            "questions": [
                {
                    "id": 7,
                    "quiz_id": 3,
                    "question": "Sample question 1",
                    "choices": [
                        {
                            "a": "t32131est choice"
                        },
                        {
                            "b": "tes232t cfdfdhoice"
                        },
                        {
                            "c": "test choice"
                        },
                        {
                            "d": "test"
                        }
                    ],
                    "answer": "a",
                    "created_at": "2018-08-10 03:31:25",
                    "updated_at": "2018-08-10 03:31:25"
                },
                {
                    "id": 8,
                    "quiz_id": 3,
                    "question": "Sample question 2",
                    "choices": [
                        {
                            "a": "t32131est choice"
                        },
                        {
                            "b": "tes232t cfdfdhoice"
                        },
                        {
                            "c": "test choice"
                        },
                        {
                            "d": "test"
                        }
                    ],
                    "answer": "a",
                    "created_at": "2018-08-10 03:31:25",
                    "updated_at": "2018-08-10 03:31:25"
                },
                {
                    "id": 9,
                    "quiz_id": 3,
                    "question": "Question 3",
                    "choices": [
                        {
                            "a": "test choice"
                        },
                        {
                            "b": "Answer B"
                        },
                        {
                            "c": "C"
                        },
                        {
                            "d": "eDi wow"
                        }
                    ],
                    "answer": "c",
                    "created_at": "2018-08-10 03:31:25",
                    "updated_at": "2018-08-10 03:31:25"
                }
            ]
        },
        {
            "id": 4,
            "teacher_id": 1,
            "title": "third Quiz",
            "time_limit": 15,
            "quiz_date": "2018-08-10 00:00:00",
            "created_at": "2018-08-10 03:53:35",
            "updated_at": "2018-08-10 03:53:35",
            "questions": [
                {
                    "id": 10,
                    "quiz_id": 4,
                    "question": "Sample question 1",
                    "choices": [
                        {
                            "a": "t32131est choice"
                        },
                        {
                            "b": "tes232t cfdfdhoice"
                        },
                        {
                            "c": "test choice"
                        },
                        {
                            "d": "test"
                        }
                    ],
                    "answer": "a",
                    "created_at": "2018-08-10 03:53:35",
                    "updated_at": "2018-08-10 03:53:35"
                },
                {
                    "id": 11,
                    "quiz_id": 4,
                    "question": "Sample question 2",
                    "choices": [
                        {
                            "a": "t32131est choice"
                        },
                        {
                            "b": "tes232t cfdfdhoice"
                        },
                        {
                            "c": "test choice"
                        },
                        {
                            "d": "test"
                        }
                    ],
                    "answer": "a",
                    "created_at": "2018-08-10 03:53:35",
                    "updated_at": "2018-08-10 03:53:35"
                },
                {
                    "id": 12,
                    "quiz_id": 4,
                    "question": "Question 3",
                    "choices": [
                        {
                            "a": "test choice"
                        },
                        {
                            "b": "Answer B"
                        },
                        {
                            "c": "C"
                        },
                        {
                            "d": "eDi wow"
                        }
                    ],
                    "answer": "c",
                    "created_at": "2018-08-10 03:53:35",
                    "updated_at": "2018-08-10 03:53:35"
                }
            ]
        },
        {
            "id": 5,
            "teacher_id": 1,
            "title": "QUIZ NO. 5",
            "time_limit": 60,
            "quiz_date": "2018-08-10 00:00:00",
            "created_at": "2018-08-10 03:59:15",
            "updated_at": "2018-08-10 03:59:15",
            "questions": [
                {
                    "id": 13,
                    "quiz_id": 5,
                    "question": "Question 1",
                    "choices": [
                        {
                            "a": "String A",
                            "b": "String B",
                            "c": "String C",
                            "d": "String D"
                        }
                    ],
                    "answer": "Answer 1",
                    "created_at": "2018-08-10 03:59:15",
                    "updated_at": "2018-08-10 03:59:15"
                }
            ]
        },
        {
            "id": 6,
            "teacher_id": 1,
            "title": "ufufkfkf",
            "time_limit": 10,
            "quiz_date": "2018-08-10 00:00:00",
            "created_at": "2018-08-10 04:16:46",
            "updated_at": "2018-08-10 04:16:46",
            "questions": [
                {
                    "id": 14,
                    "quiz_id": 6,
                    "question": "jfkf",
                    "choices": [
                        {
                            "a": "ifkf",
                            "b": "jdjd",
                            "c": "jdjd",
                            "d": "jdjd"
                        }
                    ],
                    "answer": "d",
                    "created_at": "2018-08-10 04:16:46",
                    "updated_at": "2018-08-10 04:16:46"
                }
            ]
        }
    ]
}
```


### 3. Create Quiz

__Endpoint__
```
POST /api/teacher/quizzes
```

__Sample Request__
```json
{
	"title" : "First Quiz",
	"time_limit" : 30,
	"questions": [
		{
			"question" : "Sample question?",
			"answer" : "a",
			"choices" : [
				{ "a" : "test choice" },
				{ "b" : "test choice" },
				{ "c" : "test choice" },
				{ "d" : "test choice" }
			]
		},
		{
			"question" : "Sample question?",
			"answer" : "a",
			"choices" : [
				{ "a" : "test choice" },
				{ "b" : "test choice" },
				{ "c" : "test choice" },
				{ "d" : "test choice" }
			]
		}
	]
}
```

__Sample Response__
```json
{
    "data": {
        "title": "First Quiz",
        "time_limit": 30,
        "quiz_date": "2018-08-08 20:27:03",
        "teacher_id": 1,
        "updated_at": "2018-08-08 20:27:03",
        "created_at": "2018-08-08 20:27:03",
        "id": 2
    },
    "message": "created"
}
```
## Student
### Lecture
#### 1. Get lectures
#### 2. Answer lecture quiz
### Quizzes
#### 1. Get quizzes
__Endpoint__
```
GET /api/student/quizzes
```
__Sample Response__
```json
{
    "current_page": 1,
    "data": [
        {
            "id": 1,
            "teacher_id": 1,
            "title": "Test quiz 1",
            "time_limit": 60,
            "quiz_date": "2018-08-08 00:00:00",
            "created_at": "2018-08-08 16:24:10",
            "updated_at": "2018-08-08 16:24:10"
        },
        {
            "id": 2,
            "teacher_id": 1,
            "title": "First Quiz",
            "time_limit": 30,
            "quiz_date": "2018-08-08 00:00:00",
            "created_at": "2018-08-08 20:27:03",
            "updated_at": "2018-08-08 20:27:03"
        }
    ],
    "first_page_url": "http://127.0.0.1:8000/api/student/quizzes?page=1",
    "from": 1,
    "last_page": 1,
    "last_page_url": "http://127.0.0.1:8000/api/student/quizzes?page=1",
    "next_page_url": null,
    "path": "http://127.0.0.1:8000/api/student/quizzes",
    "per_page": 15,
    "prev_page_url": null,
    "to": 2,
    "total": 2
}
```

#### 2. Get Quiz
__Endpoint__
```
GET /api/quizzes/{quiz}
```

__Sample Response__
```json
{
    "data": {
        "id": 1,
        "teacher_id": 1,
        "title": "Test quiz 1",
        "time_limit": 60,
        "quiz_date": "2018-08-08 00:00:00",
        "created_at": "2018-08-08 16:24:10",
        "updated_at": "2018-08-08 16:24:10",
        "questions": [
            {
                "id": 1,
                "quiz_id": 1,
                "question": "Question 1",
                "choices": {
                    "a": "choice 1",
                    "b": "choice 2",
                    "c": "choice 3",
                    "d": "choice 4"
                },
                "answer": "a",
                "created_at": "2018-08-08 16:24:10",
                "updated_at": "2018-08-08 16:24:10"
            },
            {
                "id": 2,
                "quiz_id": 1,
                "question": "Question 2",
                "choices": {
                    "a": "choice 1",
                    "b": "choice 2",
                    "c": "choice 3",
                    "d": "choice 4"
                },
                "answer": "b",
                "created_at": "2018-08-08 16:24:10",
                "updated_at": "2018-08-08 16:24:10"
            },
            {
                "id": 3,
                "quiz_id": 1,
                "question": "Question 3",
                "choices": {
                    "a": "choice 1",
                    "b": "choice 2",
                    "c": "choice 3",
                    "d": "choice 4"
                },
                "answer": "a",
                "created_at": "2018-08-08 16:24:10",
                "updated_at": "2018-08-08 16:24:10"
            }
        ]
    }
}
```

#### 3. Answer quiz
__Endpoint__
```
PUT/PATCH /api/student/quizzes/{id}
```

__Sample Request__
```json
{
	"answers" : [
		{
			"id" : 1,
			"answer" : "a"
		},
		{
			"id" : 2,
			"answer" : "b"
		},
		{
			"id" : 3,
			"answer" : "c"
		}
		]
}
```
__Sample Response__
```json
{
    "message": "Quiz Submitted",
    "data": {
        "score": 2
    }
}
```
### Attendance
#### 1. Get List
__Endpoint__

```
GET /api/student/meetings
```

__Sample Response__
```json
{
    "current_page": 1,
    "data": [
        {
            "id": 1,
            "teacher_id": 1,
            "code": "test",
            "created_at": "2018-08-12 07:44:13",
            "updated_at": "2018-08-12 07:44:13",
            "teacher": {
                "id": 1,
                "name": "John Doe",
                "email": "johndoe@mail.com",
                "user_type": "teacher",
                "created_at": "2018-08-12 07:44:13",
                "updated_at": "2018-08-12 07:44:13"
            }
        }
    ],
    "first_page_url": "http://127.0.0.1:8000/api/student/meetings?page=1",
    "from": 1,
    "last_page": 1,
    "last_page_url": "http://127.0.0.1:8000/api/student/meetings?page=1",
    "next_page_url": null,
    "path": "http://127.0.0.1:8000/api/student/meetings",
    "per_page": 15,
    "prev_page_url": null,
    "to": 1,
    "total": 1
}
```

2. Attend Meeting

__Endpoint__

```
POST /api/student/meetings/{meeting}/attend
```

__Sample Request__
```json
{
	"code" : "test"
}
```

__Sample Response__
```json
{
    "data": {
        "user_id": 2,
        "is_late": false,
        "meeting_id": 1,
        "updated_at": "2018-08-12 08:56:35",
        "created_at": "2018-08-12 08:56:35",
        "id": 2
    },
    "message": "created"
}
```
