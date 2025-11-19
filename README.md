# 📘 Sistema de Gestión Escolar – SiGE

Desarrollado en **PHP 8 + Laravel 10 + MySQL**  
Proyecto final – Base de Datos & Programación en PHP – Técnica 3  

---

## 1. Descripción del Proyecto

El **Sistema de Gestión Escolar (SiGE)** permite administrar docentes, materias asociadas y usuarios del sistema.  
Implementa un **CRUD completo**, con interfaz intuitiva, validaciones, roles de usuario y documentación integrada.

El objetivo es ofrecer una plataforma simple y funcional para gestionar la información administrativa de una institución educativa.

---

## 2. Tecnologías Utilizadas

| Componente  | Tecnología               |
|------------|--------------------------|
| Backend    | PHP 8.x – Laravel 10     |
| Base de datos | MySQL 8               |
| Frontend   | Blade Templates + TailwindCSS |
| Autenticación | Laravel Breeze |
| Validación | Laravel Validator        |
| Roles      | Middleware personalizado |

---

## 3. Requerimientos Previos

- PHP 8.1+
- Composer
- MySQL 5.7+
- Extensiones: pdo_mysql, mbstring, openssl, tokenizer
- (Opcional) NodeJS + npm

---

## 4. Instalación

### 4.1 Clonar repositorio
```
git clone https://github.com/usuario/sige-proyecto.git
cd sige-proyecto
```

### 4.2 Instalar dependencias
```
composer install
npm install
npm run build
```

### 4.3 Configurar .env
```
cp .env.example .env
```

Editar:
```
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sistema_sige
DB_USERNAME=root
DB_PASSWORD=password
```

### 4.4 Generar key
```
php artisan key:generate
```

### 4.5 Migraciones
```
php artisan migrate
```

### 4.6 Ejecutar el sistema
```
php artisan serve
```

---

## 5. Usuarios del Sistema

### Administrador
- CRUD completo de docentes
- CRUD de materias
- CRUD de usuarios
- Modificar contraseñas
- Buscar docentes por DNI o apellido

### Usuario Estándar
- Consultar docentes
- Buscar docentes
- Cambiar su contraseña

---

## 6. Funcionalidades

### 6.1 CRUD Docentes
Campos:
- Apellido, Nombre, DNI, Edad, Fecha Nacimiento  
- CUIL, Dirección, Código Postal  
- Teléfono, Mail ABC  

### 6.2 Materias
- Materia
- Curso
- División
- Día
- Horarios

### 6.3 Usuarios
- Crear usuarios estándar
- Modificar usuarios
- Cambiar contraseñas

---

## 7. Validaciones

- Campos obligatorios
- Formato de DNI
- Email ABC válido
- CUIL correcto
- Horarios válidos
- Contraseñas seguras

---

## 8. Seguridad

- Middleware auth
- Middleware admin
- CSRF enabled
- Password hashing (bcrypt)

---

## 9. Tablas MySQL

### teachers
id, apellido, nombre, dni, edad, fecha_nacimiento, cuil, direccion, codigo_postal, telefono, email_abc

### subjects
id, teacher_id, materia, curso, division, dia, hora_inicio, hora_fin

### users
id, name, email, password, is_admin

---

## 10. Troubleshooting

### No conecta MySQL
- Revisar `.env`
- MySQL corriendo

### Migraciones fallan
```
php artisan migrate:fresh
```

### CSS/JS no cargan
```
npm run build
```

---

## 11. Créditos
Sistema desarrollado por **Santiago Seipel**, EEST N°3, 2025.
