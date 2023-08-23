#!/bin/bash

# Script: MoveToApache2.bash
# Descripción: Este script mueve la carpeta 'PRACTICA-HOLA-MUNDO' al directorio 'www/html' para que se pueda servir en Apache.
# Autor: Marco Munguia
# Fecha: 2023-08-22
# Ruta completa del directorio 'www/html' de Apache
destino_dir="/var/www/html/"

echo "Eliminando la carpeta si existe"
if [ -e "$destino_dir/PRACTICA-HOLA-MUNDO" ]; then
    sudo rm -rf "$destino_dir/PRACTICA-HOLA-MUNDO"
    echo "La carpeta existe y ha sido borrada."
fi

echo "Copiando la carpeta a $destino_dir"
sudo cp -r PRACTICA-HOLA-MUNDO "$destino_dir"

echo "Proceso finalizado"
