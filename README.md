# Sistema de pedidos para tienda de fotocopias

Aplicación web para gestionar pedidos de impresión en una tienda pequeña. Desarrollada para resolver un problema real: los clientes enviaban sus archivos por WhatsApp o correo de forma desorganizada, y la dueña de la tienda perdía tiempo buscando qué imprimir para cada uno.

**Proyecto en uso real en Venezuela.**

## ¿Cómo funciona?

Los clientes entran al formulario desde su celular o computador, suben sus archivos y dejan las instrucciones. El pedido aparece en el panel de la tienda en tiempo real, sin que nadie tenga que enviar nada manualmente.

## Funcionalidades

- Formulario para clientes con subida de múltiples archivos (PDF, Word, JPG, PNG)
- Panel de gestión con actualización en tiempo real
- Descarga directa de archivos desde el panel
- Botón de WhatsApp directo al cliente
- Historial de pedidos por fecha
- QR para compartir el formulario fácilmente
- Notificación de sonido al recibir un pedido nuevo
- Protección del panel con contraseña

## Tecnologías

- HTML, CSS y JavaScript vanilla
- Supabase (base de datos PostgreSQL + almacenamiento de archivos)
- PHP para manejo de descargas
- cPanel para hosting y deploy
- Git para control de versiones

## Demo

[fotocopias.gadimport.com](https://fotocopias.gadimport.com)