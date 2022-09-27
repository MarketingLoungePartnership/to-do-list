## MLP To-DO - Instructions

You must demonstrate the following abilities/skills: make models, controllers, migrations, HTML, CSS, blade, Git commits, blade templates, etc. 

**1. Fork this repo**

**2. Build front-end**

   Layout must be as follows:
   
   ![Alt text](assets/site-layout.png?raw=true "Title")
   Please note that the above image and logo are in the 'assets' folder.

**3. Build To-Do list functionality** 

     A user should be able to
     * Create a task.
     * Delete a task.
     * Mark a task as completed.
     

**Good Luck !!! Once done, please send us the link of your repo.**

## My Notes

# Assumptions
The To do list does not belongs to a user. Therefore I have not used Authorizations, ORM relationships
This is a simple CRUD type application, therefore I did not follow apiResource route

# Validation
I have created a Validation request file, but did not use it as there are no complex form validations to be done
otherwise we must use Validation request file as Dependecy Injection in CRUD functions

# Model
Model has getters and setters. I did not need to add any extra functions to run Queries

# Testing
I did not spend the time writing Unit Tests. Let me know if you still require.

# factory file and seeders
I have created the factory file using faker function to created data
and DabaseSeeder has instructions to create data

# artisan commands
php artisan migrate:fresh
php artisan db:seed

