import { useState } from "react"


export default function Card(){
    //react hooks
    var cont:number=10

    const [contador, setContador ] = useState(10) 

    const aumentar = () =>{
        cont++
        console.log("Hola", cont)
        setContador(contador+1)
    }
    return(
        <>
            <h1>Card {contador}</h1>
            <button onClick={aumentar}>Hola</button>
        </>
    )
}