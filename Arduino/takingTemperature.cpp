

#include <cactus_io_AM2302.h>

#include <SoftwareSerial.h>
#include <cactus_io_AM2302.h>

#define SENSOR

SoftwareSerial D1(10, 11);
#define AM2302_PIN 2
AM2302 dht(AM2302_PIN);

void setup()
{
    D1.begin(9600); // incializa a 9600 bps la comunicacion con D1 Mini
    Serial.begin(9600);
    Serial.println("AM2302 Humidity - Temperature Sensor");
    dht.begin();
    D1.println("AT+CWMODE=1"); // establece modo cliente (station)
    delay(1000);
    D1.println("AT+CWJAP=\"Identificador\",\"Password\""); // unirse a la red local
    delay(10000);
    D1.println("AT+CIPMUX=1"); // establece multiples conexiones en simultaneo
    delay(1000);
    D1.println("AT+CIPSERVER=1,80"); // inicia servidor web en puerto 80
    delay(1000);
}

void loop()
{
    if (D1.available())
    {
        delay(1000);
        if (D1.find("+IPD,"))
        {
            int conexion = D1.read() - 48; // lee el byte, resta 48 y almacena en variable conexion
            if (D1.find("led="))
            {
                int lectura = D1.read() - 48; // lee el byte, resta 48 y almacena en variable lectura

                String pagina = "<!doctype html><html><head><meta http-equiv=\"refresh\" content=\"15\"></head><body>";
                pagina += "<form method= \"post\"><h1>Temperature</h1> <input type=\"text\" name=\"name\" placeholder = \"Name\" autocomplete = \"off\"><br><br>";
                pagina += "<?php $temp = ";
                dht.readTemperature();
                float TEMPERATURA = dht.temperature_F; // obtiene valor de temperatura y almacena en variable
                pagina += String(TEMPERATURA);         // agrega a cadena el valor de temperatura convertido a String

                pagina += "echo '<input type= \"number\" name= \"temperature \" value = \"'.$temp.'\">'";
                pagina += "?> <br><br> <input type=\"submit\" name= \"register\"> </form>  <?php include(\"register.php\"); ?>";
                pagina += "</body></html>"; // agrega etiquetas para cerrar el codigo HTML

                String enviar = "AT+CIPSEND="; // crea cadena enviar con comando AT para enviar datos
                enviar += conexion;            // agrega a la cadena el numero de conexion
                enviar += ",";
                enviar += pagina.length();
                D1.println(enviar); // envia cadena enviar por conexion serie al modulo
                delay(1000);
                D1.println(pagina); // envia cadena pagina por conexion serie al modulo
                delay(1000);

                String cerrar = "AT+CIPCLOSE="; // crea cadena cerrar con comando AT para cerrar conexion
                cerrar += conexion;             // agrega a cadena cerrar el numero de conexion
                D1.println(cerrar);             // envia la cadena cerrar por conexion serie al modulo
                delay(2000);
            }
        }
    }
}