# ERP Colombia – Código Abierto en Laravel

**ERP Colombia** es un **sistema de planificación de recursos empresariales (ERP) básico**, desarrollado en **Laravel** y usando **Blade** como motor de vistas. Está diseñado para cubrir las necesidades contables y legales de empresas en **Colombia**, cumpliendo con normas tributarias y laborales básicas.

---

## ✨ Características principales

-   🧾 Gestión de **facturación electrónica** y documentos tributarios según DIAN.
-   📊 Contabilidad básica y registro de transacciones.
-   💼 Gestión de clientes y proveedores.
-   📦 Control de inventario y productos.
-   👥 Gestión de usuarios y roles simples con permisos.
-   🌐 Todo en **Blade / web**, sin dependencias front-end complicadas.

---

## 💻 Tecnologías

-   **Backend:** Laravel 12
-   **Frontend:** Blade templates
-   **Base de datos:** MySQL / PostgreSQL
-   **Multi-tenancy:** Opcional con Spatie Multitenancy
-   **Roles y permisos:** Spatie Permissions

---

## 🚀 Instalación

1. Clonar el repositorio:

```bash
git clone https://github.com/SS-Bulker/parrot.git
cd parrot
```

2. Instalar dependencias:

```bash
composer install
```

3. Configurar archivo `.env` con tu base de datos y credenciales.

4. Generar key de Laravel:

```bash
php artisan key:generate
```

5. Ejecutar migraciones:

```bash
php artisan migrate
```

6. Levantar servidor local:

```bash
php artisan serve
```

---

## 📝 Licencia

Este proyecto es **open source** bajo **MIT License**. Puedes usarlo, modificarlo y distribuirlo libremente, manteniendo el aviso de copyright.

---

## 📌 Roadmap (Opcional)

-   [ ] Integración completa con DIAN para facturación electrónica.
-   [ ] Panel administrativo con roles y permisos más avanzados.
-   [ ] Gestión de inventario multi-empresa.
-   [ ] Reportes financieros y contables.
-   [ ] Internacionalización y soporte multi-idioma.
