# 🚪 Indfes Smartdoors — MERN Stack Migration

[![MERN Stack](https://img.shields.io/badge/Stack-MERN-blue.svg?style=for-the-badge&logo=react)](https://react.dev/)
[![Node.js Version](https://img.shields.io/badge/Node-v18+-green.svg?style=for-the-badge&logo=node.js)](https://nodejs.org/)
[![Database](https://img.shields.io/badge/Database-MongoDB-brightgreen.svg?style=for-the-badge&logo=mongodb)](https://www.mongodb.com/)
[![License: ISC](https://img.shields.io/badge/License-ISC-yellow.svg?style=for-the-badge)](https://opensource.org/licenses/ISC)

Welcome to the modernized **Indfes Smartdoors** web application, successfully migrated from a monolithic PHP architecture to a high-performance, secure **MERN Stack** (MongoDB, Express.js, React, Node.js). 

This migration preserves 100% of the premium visual styles, layouts, responsive design, and historical database entries from the original platform while shifting to robust REST APIs and stateful React interfaces.

---

## 🚀 Key Features

*   🔒 **Secure Authentication**: Transitioned from insecure MD5 PHP sessions to **JWT (JSON Web Tokens)** stored securely on the client, with robust password hashing using **bcryptjs**.
*   📝 **10+ Government & Business Forms**: Complete interactive forms for MCA Company Registration, MSME, Pension, E-District, Student Services, Individual Services, Accounting, Legal, GOI/Agri, and ROC.
*   🔍 **ARN Status Tracking**: Real-time status lookup utilizing Application Reference Numbers (ARN) across all service models.
*   🎫 **Support & Refunds Desk**: Clean forms to raise support tickets, request payment refunds, and log transactional queries.
*   📊 **SQL-to-MongoDB Data Migrator**: Automatic seeding utility to parse legacy SQL dumps and transition users, applications, and support tickets to MongoDB.
*   🎨 **Premium Responsive UI**: Features a smooth automatic carousel banner, custom multi-tier dropdown menus, responsive mobile layouts, and public/private route protection.

---

## 📁 Project Structure

```text
smartdoors/
├── client/                 # React Frontend (Vite + JSX)
│   ├── public/             # Copied PNG/SVG image assets
│   └── src/
│       ├── components/     # Reusable UI (Navbar, Footer, Carousel, PrivateRoute)
│       ├── context/        # AuthContext for session management
│       ├── pages/          # Individual pages (Home, Login, Signup, Dashboard, Track, Raise, Refunds)
│       │   └── forms/      # 10 specialized React form pages
│       ├── api.js          # Axios configuration with JWT auto-injection
│       └── main.jsx        # React application entrypoint
│
└── server/                 # Express Backend (Node.js)
    ├── middleware/         # JWT Verification & route protection
    ├── models/             # Mongoose schemas (User, Form, Ticket, Refund, Payment, AppSupport)
    ├── routes/             # REST API controllers (Auth, Forms, Support, Track)
    ├── seed.js             # Legacy SQL dump parser & DB seeder
    └── server.js           # Server initializer & DB connection
```

---

## 🛠️ Installation & Setup

### Prerequisites
*   [Node.js](https://nodejs.org/) (v18 or higher recommended)
*   [MongoDB](https://www.mongodb.com/try/download/community) (Running locally or MongoDB Atlas connection string)

### 1. Database Seeding (Migrating SQL Data)
Before launching the app, parse and import the legacy SQL database (`infes_ (3).sql`) data into MongoDB:

1.  Open `server/.env` and verify the `MONGO_URI`.
2.  Navigate to the server folder and run the seeder:
    ```bash
    cd server
    npm install
    node seed.js
    ```
    *All legacy accounts, forms, and tickets will be parsed and loaded into MongoDB. Accounts with password hashes `827ccb0eea8a706c4c34a16891f84e7b` will be loggable using `12345` (bcrypt-hashed), and those with `202cb962ac59075b964b07152d234b70` using `123`.*

### 2. Running the Backend Server
From the `server` directory, launch the API:
```bash
npm run dev
```
*   **Default Port**: `5000`
*   **Database logs**: Will output `✅ MongoDB connected` and `🚀 Server running on port 5000`.

### 3. Running the Frontend Application
Navigate to the `client` folder, install packages, and boot up Vite:
```bash
cd ../client
npm install --legacy-peer-deps
npm run dev
```
*   **Vite Dev Server**: `http://localhost:5173/`

---

## 🔌 API Endpoints Reference

### 🔐 Authentication (`/api/auth`)
*   `POST /signup` - Register a new user
*   `POST /login` - Log in and retrieve a JWT token
*   `GET /me` - Retrieve current logged-in user profile (Protected)
*   `POST /forgot-password` - Reset account password using registered Email & Mobile

### 📝 Services & Forms (`/api/forms`)
*   `POST /:type` - Submit a service form (mca, pension, msme, district, etc.) (Protected)
*   `GET /my` - Get all forms submitted by the current user (Protected)

### 🔍 Tracking (`/api/track`)
*   `GET /:arn` - Get application status by ARN (Protected)

### 🎫 Support & Operations (`/api/support`)
*   `POST /ticket` - Raise a general support ticket (Protected)
*   `POST /refund` - Submit a refund request (Protected)
*   `POST /payment` - Query a payment transaction (Protected)
*   `GET /my-tickets` - List current user's support tickets (Protected)

---

## 🔒 Security Practices
*   Passwords are fully salted and hashed using **bcryptjs** before storage.
*   Routes requiring auth check the presence and validity of a **JSON Web Token** via standard authorization headers (`Bearer <token>`).
*   Client handles session persistence by writing token claims to `localStorage` and automatically injecting them into headers via axios middleware.
