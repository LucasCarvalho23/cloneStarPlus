class ImgProfile {

    constructor() {

        this.imageProfile = document.querySelector("#imageProfile-id")
        this.nomeProfile = document.querySelector("#nomeProfile-id")

        this.valueShared = sessionStorage.getItem('perfil');

        this.profileEscolhido = this.valueShared

        if (this.profileEscolhido == 'Monkey D. Luffy') {
            this.nomeProfile.innerHTML = `Monkey D. Luffy`
            this.imageProfile.src = '../../Private/image/perfil01.png'
        } else if (this.profileEscolhido == 'Roronoa Zoro') {
            this.nomeProfile.innerHTML = `Roronoa Zoro`
            this.imageProfile.src = '../../Private/image/perfil02.png'
        } else if (this.profileEscolhido == 'Vinsmoke Sanji') {
            this.nomeProfile.innerHTML = `Vinsmoke Sanji`
            this.imageProfile.src = '../../Private/image/perfil03.png'
        } else {
            this.nomeProfile.innerHTML = `Monkey D. Luffy`
            this.imageProfile.src = '../../Private/image/perfil01.png'
        }

    }

}

let imgProfile = new ImgProfile()