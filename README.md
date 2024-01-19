# Youbahn chat

Awesome chat app for employers and employees to chat with each other.

## Setup

```bash
make setup
```

## Run

To start all services:

```bash
make [start]
```

To stop all services:

```bash
make stop
```

## Exercise

In Youbahn there are employers (`Employer`) and employees (`Employee`).
Employers can post jobs (`JobPost`) and employees can apply (`Application`)
to them. An application can have 3 states `pending`, `accepted` and `rejected`.

We want to create a chat box for employers and employees to chat with each other.
Only when an application between an employee and an employer exists, can they chat
with each other. There are a couple of rules to this:

- Application status = accepted:
  Both employer and employee can send messages to each other.
- Application status = rejected:
  Employer and employee cannot send anymore messages, old messages should still be visible.
- Application status = pending:
  An employer can initiate a chat. An employee can only send messages, once the employer has sent the first message.

### TODO

- Create database table(s) and models to represent the chat.
- Create endpoints to send, and retrieve messages.
- Create Vue components to display the chat and handle API interaction.
- Use Pusher to get real time updates of new messages.

### Endpoints

A few endpoints have been created to start this exercise. These are really simple
and don't really represent a production grade endpoint. There is no error handling,
no authentication and authorization, no validation. They have basic filtering and
no pagination. In short, they are incomplete, but are good enough for this exercise.

#### GET /api/users

#### GET /api/employers

#### GET /api/employees

#### GET /api/job-posts

#### GET /api/applications

Get all entries of the resource, you can filter on attributes, by adding them as query params eg:
`GET /api/job-posts?employer_id=12`

#### GET /api/users/{user_id}

#### GET /api/employers/{employer_id}

#### GET /api/employees/{employee_id}

#### GET /api/job-posts/{job-post_id}

#### GET /api/applications/{application_id}

Get a specific resource by id, eg:
`GET /api/employers/12`

### Authentication
No authentication and authorization has been added to this app. For the sake of
this exercise, a drop-down has been added to the frontend, to login as a user.
There is no actual auth behind it, it is basically just a way to select a user
to display the chat state for.
