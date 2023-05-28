<?php
/**
* Clase Persona
* @author Alberto Jesús Bazán Benítez <abazanbenitez@gmail.com> 
* @version 3.0
* {@internal Esta clase es un ejemplo para los alumnos de Distancia23} 
*/
class Persona {
    private String $nombre = "";
    private String $apellidos = "";

    //Constructor
    function Persona() {
	//Nada
    }

    // MÉTODOS PARA ESTABLECER VALORES
    /** 
    * @Deprecated
    * Asigna nombre persona
    * Método que asigna el nombre de la persona que se pasa como parámetro
    * @param valorNombre Es el nombre que se asigna a la persona
    */
    public void setNombre ($valorNombre) {
    	$nombre = valorNombre;
    }
    /** 
    * Asigna apellidos persona
    * Método que asigna los apellidos de la persona que se pasa como parámetro
    * @param valorApellidos Son los apellidos que se asignan a la persona
    */
    public void setApellidos ($valorApellidos) { 
        $apellidos = valorApellidos;
    }
    /** 
    * @Deprecated
    * Asigna nombre persona
    * Método que asigna el nombre de la persona que se pasa como parámetro (en desuso)
    * @param valorApellidos Son los apellidos que se asignan a la persona  
    */
    public void asignarApellidos ($valorApellidos) {
        $apellidos = valorApellidos;
    }

    //MÉTODOS PARA OBTENER VALORES
    /**
    * Devuelve nombre persona
    * Método que devuelve el nombre de una persona
    * @return String nombre de la persona
    */
    public String getNombre() {
        return $nombre;
    }
        /**
    * Devuelve apellidos persona
    * Método que devuelve los apellidos de una persona
    * @return String apellidos de la persona
    */
    public String getApellidos() {
        return $apellidos;
    }
}    
    //Inicializamos la clase
    $persona = new Persona();
    $resultado = $persona.setNombre("Antonio");
    echo $resultado;

?>
