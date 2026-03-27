# BiMest Manager API

## Arquitectura de Servicios Web: REST vs SOAP
Para el desarrollo del backend de BiMest Manager, hemos optado por implementar una arquitectura **REST (Representational State Transfer)** en lugar de SOAP. 

**Justificación:**
* **Velocidad y Rendimiento:** REST utiliza formatos ligeros como JSON, lo cual es crucial para la velocidad de respuesta que BiMest Manager requiere al gestionar el inventario y préstamos de material.
* **Interoperabilidad:** Al usar los métodos HTTP estándar (GET, POST, PUT, DELETE), la API se integra fácilmente con cualquier cliente, especialmente aplicaciones móviles o web modernas.
* **Menor sobrecarga:** A diferencia de SOAP, que requiere envolturas XML pesadas (envelopes) y un estricto contrato WSDL, REST nos permite una iteración ágil y eficiente.

## Integración Continua (CI/CD)
Como parte de las nuevas tendencias de desarrollo, este repositorio está preparado para integrarse con **GitHub Actions**. Esto nos permitirá automatizar el pipeline de pruebas y el despliegue de nuestros servicios distribuidos cada vez que se realice un "Push" o "Pull Request" hacia la rama `main` (Trunk).