# Gym Management System

This repository is a practical implementation of a project based on the **Advanced Laravel** course from **LinkedIn Learning**.

## Project Overview

The project is a **gym management system** that includes **trainers, users, and admins**. Users can **book appointments**, and admins can manage different aspects of the system.

## Features Implemented

### 1. **Middleware**
   Middleware acts as a bridge between a request and a response. It is used to filter HTTP requests entering the application. For example, middleware is used to check if a user is authenticated before allowing access to certain routes.

### 2. **Gates & Authorization**
   Gates are used for authorization in Laravel. They provide a simple way to determine if a user is authorized to perform a given action. Gates are typically defined in the `AuthServiceProvider` and help in restricting access to certain parts of the application.

### 3. **User Roles & Permissions**
   - Different roles are created for users, such as **Admin, Trainer, and Member**.
   - Permissions are set up to restrict or allow access to specific functionalities.

### 4. **Advanced Eloquent Features**
   - Many-to-Many relationships
   - Eager loading to optimize queries
   - Attaching and detaching relationships dynamically
   - Writing complex queries efficiently

### 5. **Custom Commands, Events & Listeners**
   - Extended Laravel functionality by creating **custom Artisan commands**.
   - Implemented event-driven architecture using **events and listeners**.

### 6. **Notifications, Queues & Scheduling**
   - Implemented **notifications** for booking confirmations and reminders.
   - Used **job queues** to handle background processes efficiently.
   - Scheduled tasks to **automate periodic operations**.

### 7. **Testing & Test-Driven Development (TDD)**
   - Implemented **HTTP tests** to ensure the application runs correctly.
   - Used **database testing** to validate data integrity.
   - Practiced **TDD principles** for better code quality.

### 8. **Service Containers & Providers**
   - Explored how Laravel manages object creation and dependencies.
   - Registered custom services using **Service Providers**.
