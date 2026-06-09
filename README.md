# Indfes Smartdoors

**MERN Stack rewrite of the Indfes government services portal.**  
Migrated from a monolithic PHP + MySQL codebase to a decoupled React frontend and Express/MongoDB backend, with a professional services directory and 10 interactive service application forms.

[![Stack](https://img.shields.io/badge/Stack-MERN-4f46e5?style=flat-square&logo=react&logoColor=white)](https://react.dev/)
[![Node](https://img.shields.io/badge/Node-v18+-339933?style=flat-square&logo=node.js&logoColor=white)](https://nodejs.org/)
[![MongoDB](https://img.shields.io/badge/Database-MongoDB-47A248?style=flat-square&logo=mongodb&logoColor=white)](https://www.mongodb.com/)
[![Vite](https://img.shields.io/badge/Bundler-Vite-646CFF?style=flat-square&logo=vite&logoColor=white)](https://vitejs.dev/)

---

## Overview

Indfes Smartdoors is a citizen services portal that lets users discover, apply for, and track the status of government and business-related services — such as company registration, pension schemes, e-district certificates, and legal documents.

The PHP version used plain HTML forms posting directly to `.php` files. This rewrite separates concerns cleanly:

- **Client** — Vite + React SPA with protected routes and real-time form state
- **Server** — Express REST API with JWT authentication and Mongoose ODM
- **Database** — MongoDB (with a seed script to import from the legacy SQL dump)

---

## Features

- **Two-tier navbar** with dropdown menus for each service category
- **Services directory** — searchable, filterable, with a category overview grid and jump navigation
- **10 service application forms**, each with:
  - Grouped fieldsets and 2-column responsive layout
  - Real-time form state via React `useState`
  - ARN (Application Reference Number) confirmation on submission
- **ARN status tracker** — look up any submitted application by its reference number
- **Support desk** — raise tickets, request refunds, or query a payment transaction
- **JWT authentication** — secure signup, login, forgot-password, and protected dashboard
- **Legacy data migration** — `seed.js` parses the original `.sql` dump and loads all historical records into MongoDB

---

## Project Structure

```
smartdoors/
├── client/                         # React frontend (Vite)
│   ├── public/                     # Static assets (images, icons)
│   └── src/
│       ├── api.js                  # Axios instance with JWT auto-injection
│       ├── main.jsx                # App entry point
│       ├── style.css               # Global base styles
│       ├── App.jsx                 # Router + route definitions
│       ├── context/
│       │   └── AuthContext.jsx     # Auth state provider (login, logout, user)
│       ├── components/
│       │   ├── Navbar.jsx          # Two-tier dropdown navbar
│       │   ├── Footer.jsx
│       │   ├── Carousel.jsx        # Auto-advancing hero banner
│       │   └── PrivateRoute.jsx    # JWT-protected route wrapper
│       └── pages/
│           ├── Home.jsx            # Landing page with carousel & service highlights
│           ├── ServicesPage.jsx    # Full service directory with search & filters
│           ├── Dashboard.jsx       # User dashboard — submitted applications list
│           ├── Track.jsx           # ARN status lookup
│           ├── Login.jsx
│           ├── Signup.jsx
│           ├── Forgot.jsx          # Password reset by email + mobile
│           ├── Raise.jsx           # Support ticket form
│           ├── Refunds.jsx         # Refund request form
│           └── forms/
│               ├── ServiceForm.css         # Shared form design system
│               ├── useFormSubmit.js        # Shared form submission hook (ARN, loading, error)
│               ├── McaForm.jsx             # Company Registration (MCA)
│               ├── MsmeForm.jsx            # MSME / GST / FSSAI / Startup India
│               ├── RocForm.jsx             # ROC & Compliance
│               ├── AccountingForm.jsx      # GST Returns / ITR / TDS / Audit
│               ├── LegalForm.jsx           # Notary / Affidavit / Agreements
│               ├── GoiForm.jsx             # GOI & Government Utility Services
│               ├── EDistrictForm.jsx       # E-District Certificates
│               ├── PensionForm.jsx         # Old Age / Widow / Handicapped Pension
│               ├── IndividualForm.jsx      # PAN / Aadhaar / Driving Licence / Passport
│               └── StudentForm.jsx         # Gap Certificate / Affidavits / EWS
│
└── server/                         # Express backend (Node.js)
    ├── server.js                   # Entry point — Express app + MongoDB connection
    ├── seed.js                     # Legacy SQL dump parser & MongoDB seeder
    ├── middleware/
    │   └── auth.js                 # JWT verification middleware
    ├── models/
    │   ├── User.js                 # User schema (name, email, mobile, password hash)
    │   ├── Form.js                 # Service application schema (type, fields, ARN, status)
    │   └── Support.js              # Support ticket / refund / payment query schema
    └── routes/
        ├── auth.js                 # /api/auth — signup, login, me, forgot-password
        ├── forms.js                # /api/forms — submit form, list my forms
        ├── track.js                # /api/track — lookup by ARN
        └── support.js              # /api/support — tickets, refunds, payment queries
```

---

## Getting Started

### Prerequisites

- [Node.js](https://nodejs.org/) v18+
- [MongoDB](https://www.mongodb.com/try/download/community) running locally, or a MongoDB Atlas connection string

### 1. Configure environment

Copy and edit the server environment file:

```
server/.env
```

```env
MONGO_URI=mongodb://localhost:27017/smartdoors
JWT_SECRET=your_secret_key
PORT=5000
```

### 2. Seed the database (first run only)

Imports all legacy users, applications, and support tickets from the original SQL dump into MongoDB:

```bash
cd server
npm install
node seed.js
```

Legacy accounts with the hash `827ccb0eea8a706c4c34a16891f84e7b` log in with `12345`.  
Accounts with `202cb962ac59075b964b07152d234b70` log in with `123`.

### 3. Start the backend

```bash
cd server
npm run dev
```

Runs on `http://localhost:5000`. Outputs:
```
✅ MongoDB connected
🚀 Server running on port 5000
```

### 4. Start the frontend

```bash
cd client
npm install --legacy-peer-deps
npm run dev
```

Runs on `http://localhost:5173`.

---

## API Reference

### Authentication — `/api/auth`

| Method | Endpoint | Auth | Description |
|--------|----------|------|-------------|
| POST | `/signup` | — | Register a new user |
| POST | `/login` | — | Log in, returns JWT |
| GET | `/me` | ✅ | Get current user profile |
| POST | `/forgot-password` | — | Reset password via email + mobile |

### Forms — `/api/forms`

| Method | Endpoint | Auth | Description |
|--------|----------|------|-------------|
| POST | `/:type` | ✅ | Submit a service form (`mca`, `msme`, `roc`, `pension`, `district`, `individual`, `student`, `legal`, `accounting`, `agri`) |
| GET | `/my` | ✅ | List all forms submitted by the logged-in user |

### Tracking — `/api/track`

| Method | Endpoint | Auth | Description |
|--------|----------|------|-------------|
| GET | `/:arn` | ✅ | Get application status by ARN |

### Support — `/api/support`

| Method | Endpoint | Auth | Description |
|--------|----------|------|-------------|
| POST | `/ticket` | ✅ | Raise a support ticket |
| POST | `/refund` | ✅ | Submit a refund request |
| POST | `/payment` | ✅ | Query a payment transaction |
| GET | `/my-tickets` | ✅ | List current user's support tickets |

---

## Security

- Passwords are hashed with **bcryptjs** (never stored in plain text)
- All protected routes verify a **JWT** passed as `Authorization: Bearer <token>`
- The React client stores the token in `localStorage` and injects it automatically via an Axios interceptor in `api.js`

---

## Tech Stack

| Layer | Technology |
|-------|-----------|
| Frontend | React 18, Vite, React Router v6 |
| Styling | Vanilla CSS (Plus Jakarta Sans, custom design system) |
| Backend | Node.js, Express.js |
| Database | MongoDB, Mongoose |
| Auth | JSON Web Tokens (JWT), bcryptjs |
| HTTP Client | Axios |
| Dev Server | Vite HMR (`localhost:5173`) |
| API Server | Express (`localhost:5000`) |
