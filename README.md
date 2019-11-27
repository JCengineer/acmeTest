# Laravel/AngularJS practical test

This repo has code to be used on practical tests using a platform that is close
to the production platform currently in use.

## Running the test

You need to have Docker (linux, windows or macos) and run the setup script located
at /dev_env from a bash compatible terminal (on windows we suggest you use
Ubuntu Linux Subsystem).

- cd dev_env
- ./setup.sh

## Available logins

- Admin area: admin@test.acme / password
- Web area: user@test.acme / password

## Objectives

<ol>
    <li> Implement the migrations for the Data model stablished at 
    database/database.png diagram
    <li> Implement the routes and the controller required by the frontend for
    get Collection, get, post, patch/put and delete
    <li> Implement backend validations to create/edit forms and questions
    <li> Implement the persistence of the data from the frontend to forms 
    and questions (create and edit forms)
    <li> Report any bugs found on the current structure
</ol>

## The Problem

The full problem is exposed [here](Developer%20Intermission%20-%20Technical%20Test.pdf).
Please refer to this document for a complete view of what's the system 
supposed to implement and business rules.