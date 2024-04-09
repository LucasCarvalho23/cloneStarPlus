class Profile {

    constructor() {
        
        this.imgLogin01 = document.querySelector("#img-login01")
        this.imgLogin02 = document.querySelector("#img-login02")
        this.imgLogin03 = document.querySelector("#img-login03")

        this.imgLogin01.addEventListener("click", () => { 
            this.imgLogin = this.imgLogin01
            this.profileEscolhido() 
        })
        this.imgLogin02.addEventListener("click", () => { 
            this.imgLogin = this.imgLogin02
            this.profileEscolhido() 
        })
        this.imgLogin03.addEventListener("click", () => { 
            this.imgLogin = this.imgLogin03
            this.profileEscolhido() 
        })

    }

    profileEscolhido() {
        sessionStorage.setItem('perfil', this.imgLogin.name);
    }

}

let profile = new Profile()

export default profile;