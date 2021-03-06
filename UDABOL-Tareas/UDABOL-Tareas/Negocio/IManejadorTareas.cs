﻿using System;
using System.Collections.Generic;
using System.Text;
using Modelo;

namespace Negocio
{

    public interface IManejadorTareas
    {
        public List<ModeloBase> ListarTareas();
        // [Nombre:Fulanito de tal, Estado:Pendiente,Tarea:Limpiar Habitacion]------>SuperUsuario
        // [Estado:En Proceso]------>Usuario Comun        

        // Update Tabla set camposAModificar where identificador=valorIdentificador
        public Tarea Modificar(Dictionary<String,String> camposAModificar,KeyValuePair<String,String> condicion);

    }
}
