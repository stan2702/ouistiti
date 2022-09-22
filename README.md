# OUISTITI v1.0
Avoir une photo de la webcam juste avec un lien malveillant
Pour mes confrères de Instant-Hack

# Comment ça marche ?
<p>L’outil génère une page HTTPS malveillante à l’aide des serveurs Serveo ou Ngrok Port Forwarding, et un code javascript pour webcam qui demande  les requêtes à l’aide de MediaDevices.getUserMedia. </p>

<p>The MediaDevices.getUserMedia() invite l’utilisateur à autoriser l’utilisation d’une entrée multimédia qui produit un MediaStream avec des pistes contenant les types de médias demandés. Ce flux peut inclure, par exemple, une piste vidéo (produite par un matériel ou une source vidéo virtuelle telle qu’une caméra, un périphérique d’enregistrement vidéo, un service de partage d’écran, etc.), une piste audio (de même, produite par une source audio physique ou virtuelle comme un microphone, un convertisseur A / N, etc.), et éventuellement d’autres types de pistes. </p>

[En savoire plus sur MediaDEvices.getUserMedia() ici](https://developer.mozilla.org/en-US/docs/Web/API/MediaDevices/getUserMedia)
<p> Pour convaincre la cible d’accorder des autorisations pour accéder à la caméra, la page utilise un code javascript créé par https://github.com/wybiral qui le transforme en flux de caméra.</p>

## INSTALLATION (Kali Linux IH):

```
git clone https://github.com/stan2702/ouistiti
cd ouistiti
bash ouistiti
```
