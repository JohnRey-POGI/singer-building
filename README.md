# singer-building
This repository contains the **WordPress child theme** developed as part of the mini-build assignment.
The task was to convert a provided mockup design into a responsive WordPress site using **ACF (Advanced Custom Fields)** and a child theme based on **Twenty Twenty-Four**.

---

## 🚀 Features Implemented
- **Hero Section** with background image and floating text.
- **Why Section** with text on the left and responsive image on the right.
- **Portfolio Section** with image grid (images auto-resize to uniform size).
- **Experience Section** with background image and left-aligned text.
- **Contact Section** with simple text and structure.
- Fully responsive layouts at:
  - 360px (mobile)
  - 768px (tablet)
  - 1200px (desktop)
- ACF fields for all section content (title, text, images).
- Follows pixel-faithful mockup design.

---

## 📂 Repo Contents
singer-building/
├── style.css
├── functions.php
├── front-page.php
├── template-parts/
│ ├── hero.php
│ ├── why.php
│ ├── portfolio.php
│ ├── experience.php
│ └── contact.php
├── logo/
│ └── Logo Light.svg

---

## 🔧 Installation
1. Download or clone this repository.
2. Compress the `singer-building` folder into a `.zip`.
3. In WordPress Admin:
   - Go to **Appearance → Themes → Add New → Upload Theme**.
   - Upload the `.zip` and activate the theme.
4. Install and activate the **ACF plugin**.
5. Import ACF fields:
   - Go to **ACF → Tools → Import Field Groups**.
   - Upload the provided `.json` file.
6. (Optional) Import demo content:
   - Go to **Tools → Import → WordPress Importer**.
   - Upload the provided `.xml` file.

---

## 🖼️ Screenshots
- **Desktop**: ![Desktop Screenshot](https://github.com/JohnRey-POGI/singer-building/blob/main/screenshots/singer-building.local_(Desktop).png)
- **Tablet (768px)**: ![Tablet Screenshot](https://github.com/JohnRey-POGI/singer-building/blob/main/screenshots/singer-building.local_(Tablet).png)
- **Mobile (360px)**: ![Mobile Screenshot](https://github.com/JohnRey-POGI/singer-building/blob/main/screenshots/singer-building.local_(Mobile).png)

---

## 📜 Notes
- Base theme: **Twenty Twenty-Four**.  
- Child theme name: **singer-building**.  
- Developed and tested on WordPress 6.x.  

---

👨‍💻 Author: John Rey POGi
📅 Date: September 2025
