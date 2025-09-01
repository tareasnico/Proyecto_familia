const respuestas = {
  "parentesco": "El parentesco es el vínculo jurídico entre personas unidas por sangre, adopción o matrimonio.",
  "filiacion": "La filiación es el vínculo legal que une a los hijos con sus padres.",
  "adopcion": "La adopción se tramita en los Juzgados de Familia, con intervención judicial.",
  "matrimonio": "Los requisitos para casarse son ser mayor de edad, presentar DNI y no estar casado previamente.",
  "divorcio": "El divorcio se tramita en los Juzgados de Familia con abogado."
};

function sendMessage() {
  const input = document.getElementById("userInput");
  const chatbox = document.getElementById("chatbox");
  const userMessage = input.value.toLowerCase();

  chatbox.innerHTML += "<p><strong>Tú:</strong> " + input.value + "</p>";

  let respuesta = "Lo siento, no tengo esa información.";

  for (let clave in respuestas) {
    if (userMessage.includes(clave)) {
      respuesta = respuestas[clave];
    }
  }

  chatbox.innerHTML += "<p><strong>Bot:</strong> " + respuesta + "</p>";
  input.value = "";
  chatbox.scrollTop = chatbox.scrollHeight;
}
