# ACTIVIDAD 5: EVOLUCIÓN Y MEJORA DEL PROYECTO INTEGRADOR - MODIFICACIÓN DE LAS ACTIVIDADES 1 Y 2 - PWD 7° 2° Grupo B
EEST N°1 "Eduardo Ader" - 7° 2º Año - Prof. York

## 📅 Descripción del Proyecto

Sistema web de reporte de reclamos desarrollado con WordPress y PHP. Incluye un panel de control administrativo para monitorear el estado de los reclamos registrados en la base de datos.

**OTR (Observatorio de Trámites y Reclamos)** proporciona un dashboard moderno para visualizar estadísticas y el estado de cada reclamo, permitiendo un seguimiento eficiente de los problemas reportados por la comunidad.

## 👥 Equipo de Desarrollo
Owen Olea

## 🛠️ Stack Tecnológico
Lenguajes: HTML5, CSS3, PHP 7.4+
Framework: WordPress 6.0+
Base de Datos: MySQL
Entorno: Visual Studio Code, XAMPP
Control de Versiones: Git / GitHub

## 🏗️ Arquitectura del Sistema
Este proyecto utiliza WordPress como CMS:

Backend: PHP para consultas a base de datos MySQL.
Presentación: Shortcode que genera HTML/CSS inline con diseño moderno.
Persistencia: Almacenamiento de reclamos en tabla MySQL `wp_reclamos_otr`.
Panel Administrativo: Visualización de estadísticas y lista de reclamos mediante shortcode `[mostrar_proyecto]`.

## 📁 Estructura del Repositorio
otr/
├── wordpress/
│   ├── wp-content/
│   │   ├── themes/
│   │   │   └── twentytwentyfive/
│   │   │       └── functions.php          # Shortcode del panel de control OTR
│   ├── wp-admin/                          # Panel de administración de WordPress
│   ├── wp-includes/                       # Archivos core de WordPress
│   └── index.php                          # Archivo principal de WordPress
├── LICENSE                                # Licencia MIT
├── README.md                              # Este archivo
└── .gitignore                             # Archivos excluidos del control de versiones

## 🚀 Instalación y Ejecución

### Prerrequisitos
- XAMPP instalado y configurado
- WordPress instalado en la carpeta `wordpress/`
- Base de datos MySQL configurada

### Instalación
1. Clonar repositorio:
   ```bash
   git clone https://github.com/usuario/otr.git
   ```

2. Configurar XAMPP:
   - Iniciar Apache y MySQL en XAMPP
   - Crear base de datos `otr` en phpMyAdmin
   - Importar la estructura de la tabla `wp_reclamos_otr`

3. Configurar WordPress:
   - Acceder a `http://localhost/OTR/wordpress/`
   - Completar la instalación de WordPress
   - Activar el tema Twenty Twenty-Five

4. Agregar el shortcode:
   - En cualquier página de WordPress, insertar el bloque Shortcode
   - Escribir: `[mostrar_proyecto]`
   - Guardar y publicar la página

### Uso del Panel de Control
- El shortcode `[mostrar_proyecto]` muestra:
  - Estadísticas totales de reclamos
  - Contadores por estado (Pendiente, En proceso, Resuelto)
  - Tabla completa con todos los reclamos
  - Diseño moderno con colores oscuros y badges de estado

## 📄 Licencia
Este proyecto se distribuye bajo la licencia MIT.</content>
<filePath>c:\xampp\htdocs\OTR\README.md