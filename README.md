# Saham Project

Saham is a platform built using Laravel, Filament, Tailwind CSS, and JavaScript. This platform aims to facilitate the donation and distribution of surplus food from restaurants and stores to those in need. It encompasses various features including home, donations, articles, about us, contact us pages, and three distinct panels for donors, charities, and an admin interface.

## Home Page
![Home Page](public/assets/HomePage.png)
## Admin Panel
![Admin PAnel](public/assets/AdminPnael.png)

## Tech Stack

-   **Framework:** Laravel
-   **Admin Panel:** FilamentPHP
-   **Frontend Styling:** Tailwind CSS
-   **Frontend Interactivity:** JavaScript

## Project Structure

The project is structured with the following main sections:

-   **Home:** Landing page highlighting the mission and functionality of Saham Project.
-   **Donations:** Section enabling restaurants and stores to input surplus food donations.
-   **Articles:** Articles and stories about positive impacts and success stories.
-   **About Us:** Information about the project, its goals, and the team behind it.
-   **Contact Us:** Contact information and a form for inquiries or feedback.

Additionally, the project includes three separate panels:

-   **Donors Panel:** Allows restaurants and stores to register donations.
-   **Charities Panel:** Enables charitable organizations to browse and request available donations.
-   **Admin Panel:** Provides administrative capabilities to manage users, donations, and oversee the platform's operation.

## Getting Started

To run this project locally, ensure you have the following things installed: [**composer**](https://getcomposer.org/download/) , [**nodejs/npm**](https://nodejs.org/en/download), [**git**](https://git-scm.com/downloads)

## Then Follow Those Steps

1. Clone the repository: https://github.com/Mohamed-Galdi/sahem_project.git

2. Navigate to the project directory: `cd sahem_project`

3. Install the dependencies using Composer: `composer install --ignore-platform-reqs`

4. Create a copy of the `.env.example` file and rename it to `.env`. Configure the database settings in the `.env` file (database name).

5. Generate an application key: `php artisan key:generate`

6. Create the symbolic link: `php artisan storage:link`

7. Run the database migrations and seeders: `php artisan migrate:fresh --seed`

9. Run `npm install ` to install frontend dependencies.

10. Run `npm run dev` to compile assets.

11. Start the development server with `php artisan serve`.

12. Visit `http://127.0.0.1:8000/` in your browser to access the application.

## Login credentials
- Admin: admintest@email.com + 00000000
- donor: donortest@email.com + 000000
- charity: charitytest@email.com + 000000

## Contributing

We welcome contributions to enhance the functionality, usability, or features of Saham Project. Feel free to fork this repository, make your changes, and submit a pull request!
