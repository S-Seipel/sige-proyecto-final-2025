# 📘 Sistema de Gestión Escolar (SiGE)  
### Proyecto Final 2025  
**Autor:** Santiago Seipel

---

## 📌 Descripción  
SiGE es un sistema de gestión escolar desarrollado como proyecto final académico.  
Permite gestionar:

- Docentes  
- Alumnos  
- Cursos  
- Materias  
- Horarios  
- Inscripciones  
- Registros administrativos básicos  

El proyecto está construido con:

- **Laravel 10+ (PHP 8.2+)**  
- **MySQL**  
- **Vite + TailwindCSS**  
- **Blade**  
- **Autenticación nativa de Laravel**  

---

## 🚀 Requisitos  
Antes de instalar, asegurate de tener:

- PHP 8.1 o superior  
- Composer  
- Node.js 18+  
- MySQL
- Extensiones: `pdo`, `mbstring`, `openssl`, `tokenizer`, `xml`, `ctype`, `bcmath`  

---

## 📦 Instalación

### 1️⃣ Clonar el repositorio
```bash
git clone https://github.com/S-Seipel/sige-proyecto-final-2025
cd sige
```

### 2️⃣ Instalar dependencias de PHP
```bash
composer install
```

### 3️⃣ Instalar dependencias de Node
```bash
npm install
```

### 4️⃣ Copiar el archivo de entorno
```bash
cp .env.example .env
```

### 5️⃣ Generar la clave de la app
```bash
php artisan key:generate
```

### 6️⃣ Configurar la base de datos en `.env`
Ejemplo:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sige
DB_USERNAME=root
DB_PASSWORD=
```

### ✔️ Configurar el correo en `.env` (IMPORTANTE)
Además de la base de datos, también debés configurar las credenciales del correo, necesarias para recuperar contraseña y enviar notificaciones.

Debés reemplazar los valores por tu correo Gmail real y una Contraseña de Aplicación.

```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=tu_correo@gmail.com
MAIL_PASSWORD=tu_contraseña_de_aplicacion
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=tu_correo@gmail.com
MAIL_FROM_NAME="Sistema SiGE"
```

---

### 7️⃣ Ejecutar migraciones 
```bash
php artisan migrate 
```

---

## ▶️ Cómo ejecutar la aplicación

### 🖥 Backend (Laravel)
```bash
php artisan serve
```

### 🌐 Frontend (Vite)
```bash
npm run dev
```

Esto permite que los estilos, scripts y componentes se actualicen automáticamente.

---

## 📁 Estructura del Proyecto (Resumen)
```
app/
  Http/
  Models/
bootstrap/
config/
database/
public/
resources/
  views/
  css/
  js/
routes/
  web.php
  api.php
```

---

## 🔧 Scripts útiles

### Compilar para producción:
```bash
npm run build
```

### Limpiar cachés:
```bash
php artisan optimize:clear
```

---

## 👤 Autor
**Santiago Seipel**  
Proyecto Final – 2025

---

## 📄 Licencia
Este proyecto es exclusivamente académico y no está destinado a uso comercial.
