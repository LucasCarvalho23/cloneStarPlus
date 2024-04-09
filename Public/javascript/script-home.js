class ImgProfile {

    constructor() {

        this.imageProfile = document.querySelector("#imageProfile-id")
        this.nomeProfile = document.querySelector("#nomeProfile-id")

        this.profileEscolhido = '2'

        if (this.profileEscolhido == '1') {
            this.nomeProfile.innerHTML = `Monkey D. Luffy`
            this.imageProfile.src = '../../Private/image/perfil01.png'
        } else if (this.profileEscolhido == '2') {
            this.nomeProfile.innerHTML = `Roronoa Zoro`
            this.imageProfile.src = '../../Private/image/perfil02.png'
        } else if (this.profileEscolhido == '3') {
            this.nomeProfile.innerHTML = `Vinsmoke Sanji`
            this.imageProfile.src = '../../Private/image/perfil03.png'
        } else {
            this.nomeProfile.innerHTML = `Monkey D. Luffy`
            this.imageProfile.src = '../../Private/image/perfil01.png'
        }


    }

}

let imgProfile = new ImgProfile()