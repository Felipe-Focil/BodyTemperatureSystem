#include <SoftwareSerial.h>

SoftwareSerial D1(2, 3);

void setup()
{
    // put your setup code here, to run once:
    Serial.begin(9600);
    D1.begin(9600);
}

void loop()
{
    // put your main code here, to run repeatedly:
    if (D1.available())
        Serial.write(D1.read());

    if (Serial.available())
        D1.write(Serial.read());
}