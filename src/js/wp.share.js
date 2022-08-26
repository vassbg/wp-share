const wpShareMobileBtn = document.querySelector("#wp-share-mobile")
const wpShareBtnsContainer = document.querySelector("#wp-share-btns")
const wpShareBtns = document.querySelectorAll(".wp-share-btn")

const shareIcons = {
    visible: false,
    show: function () {
        this.visible = true
        wpShareBtns.forEach((btn, index) => {
            btn.style.top = `${-(index + 1) * 55}px`
            btn.style.transform = "scale(1)"
        })
    },
    hide: function () {
        this.visible = false
        wpShareBtns.forEach((btn) => {
            btn.style.top = "0px"
            btn.style.transform = "scale(0)"
        })
    },
    toggle: function () {
        if (this.visible) this.hide()
        else this.show()
    },
}

wpShareMobileBtn.onclick = () => shareIcons.toggle()
