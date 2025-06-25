# Innovations Solution and Marketing Corporation Website

## Project Overview
Simple company website built with Laravel as part of OJT training.

## Technologies Used
- PHP 8.x
- Laravel 12.x
- Blade Templates
- HTML/CSS

## Features Implemented
- [x] Routing (Closure and Controller-based)
- [x] Master Layout System
- [x] Dynamic Page Titles
- [x] View Inheritance
- [x] Homepage with Dynamic Content
- [x] About Page with Company Info
- [x] Contact Page with Office Details
- [x] Services Page with Pricing
- [ ] Contact Form (planned)
- [ ] Responsive Design (planned)

## Development Progress

### Chapter 3: Controller-Based Routes ✅ COMPLETED
- Converted closure routes to controller-based routing
- Created HomeController, ControllerAbout, ControllerContact, ControllerService

### Chapter 4: Controllers with Data Passing ✅ COMPLETED
- Enhanced controllers to pass data using `compact()` method
- Implemented dynamic content display with Blade templates
- Added featured services and company highlights

### Chapter 5: Views and Layout System ✅ COMPLETED
**Objective**: Create master layout system and organized view structure

**What Was Implemented:**
- ✅ **Master Layout**: `layouts/app.blade.php` with navigation and footer
- ✅ **View Inheritance**: All pages extend the master layout using `@extends('layouts.app')`
- ✅ **Section System**: Content areas defined with `@yield('content')` and `@section('content')`
- ✅ **Dynamic Titles**: Page-specific titles using `@yield('title')` and `@section('title')`
- ✅ **Organized Structure**: Views organized in `pages/` folder

**Key Learning Outcomes:**
- ✅ Understanding Blade templating system
- ✅ Template inheritance with `@extends` and `@yield`
- ✅ Section management with `@section` and `@endsection`
- ✅ View organization and folder structure
- ✅ Route-Controller-View data flow

**Technical Implementation:**
```php
// Master Layout Structure
@extends('layouts.app')
@section('title', 'Page Title')
@section('content')
    <!-- Page content here -->
@endsection
```

---

## Current Working Features
- **Navigation**: Fully functional menu linking all pages
- **Homepage**: Welcome message with featured services and company highlights
- **About Page**: Company mission, statistics, and leadership team
- **Services Page**: Web development and consulting services with pricing
- **Contact Page**: Main office information and contact details

## File Structure
```
app/Http/Controllers/
├── HomeController.php
├── ControllerAbout.php
├── ControllerContact.php
└── ControllerService.php

resources/views/
├── layouts/app.blade.php
├── pages/
│   ├── about.blade.php
│   ├── contact.blade.php
│   └── service.blade.php
└── welcome.blade.php
```

## Next Steps
- [ ] Chapter 6: Advanced Blade features
- [ ] Add responsive design
- [ ] Implement contact form
- [ ] Database integration

---

*Last Updated: June 25, 2025*  
*OJT Project - Laravel Web Development Training*  
*Status: Chapter 5 Complete - Layout System Working ✅*