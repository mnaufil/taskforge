# Authentication

## What is hashing?

### Answer
Hashing is a one-way process used to convert data into a fixed-length string. Passwords are hashed before being stored in the database so the original password cannot be recovered.

### Example
Hash::make('password');

### Interview Follow-up
Difference between hashing and encryption?

---

## What is SQL Injection?

### Answer
SQL Injection occurs when user input is directly inserted into SQL queries, allowing attackers to manipulate the query.

### Bad Example
SELECT * FROM users WHERE email='$email'

### Good Example
User::where('email', $email)->first();

### Interview Follow-up
What is parameter binding?