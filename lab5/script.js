// Box Element
let box = document.getElementById("box")


// Box Size

let widthInput = document.getElementById("width")
let heightInput = document.getElementById("height")
let setSizeButton = document.getElementById("box-size-button")

setSizeButton.addEventListener("click", (e) => {
    e.preventDefault()
    box.style.width = `${widthInput.value}px`
    box.style.height = `${heightInput.value}px`
})


// Box Border
let borderWidth = document.getElementById("border-width")
let setBorderWidthButton = document.getElementById("border-width-button")

setBorderWidthButton.addEventListener("click", (e) => {
    e.preventDefault()
    box.style.borderWidth = `${borderWidth.value}px`
})


let borderGreen = document.getElementById("border-green")
let borderRed = document.getElementById("border-red")
let borderOrange = document.getElementById("border-orange")


borderGreen.addEventListener("click", (e) => {
    e.preventDefault()
    box.style.borderColor = "green"
})

borderRed.addEventListener("click", (e) => {
    e.preventDefault()
    box.style.borderColor = "red"
})

borderOrange.addEventListener("click", (e) => {
    e.preventDefault()
    box.style.borderColor = "orange"
})





let borderSolid = document.getElementById("style-solid")
let borderDotted = document.getElementById("style-dotted")
let borderDashed = document.getElementById("style-dashed")

borderSolid.addEventListener("click", (e) => {
    e.preventDefault()
    box.style.borderStyle = "solid"
})

borderDotted.addEventListener("click", (e) => {
    e.preventDefault()
    box.style.borderStyle = "dotted"
})

borderDashed.addEventListener("click", (e) => {
    e.preventDefault()
    box.style.borderStyle = "dashed"
})




// Box Background Color
let backgroundGreen = document.getElementById("background-green")
let backgroundRed = document.getElementById("background-red")
let backgroundOrange = document.getElementById("background-orange")

backgroundGreen.addEventListener("click", (e) => {
    e.preventDefault()
    box.style.backgroundColor = "green"
})

backgroundRed.addEventListener("click", (e) => {
    e.preventDefault()
    box.style.backgroundColor = "red"
})

backgroundOrange.addEventListener("click", (e) => {
    e.preventDefault()
    box.style.backgroundColor = "orange"
})