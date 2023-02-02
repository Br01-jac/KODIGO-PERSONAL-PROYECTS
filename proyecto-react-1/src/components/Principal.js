import "../styles/contenedor.css"
import "../styles/navbar.css"
import React, { useRef, useState, useEffect } from 'react';
import Renderizado from "./Renderizado";


export default function Principal() {

    const [name, setName] = useState("");
    let referenciaSeleccion = useRef();
    let controlInput = useRef();
    const [estado, setEstado] = useState(0);


    const handlerName = (e) => {
        setName(e.target.value);
    }

    const handlerSubmit = () => {
        // eslint-disable-next-line eqeqeq
        if (referenciaSeleccion.current.value == 1) {
            controlInput.current.value = "";
            setEstado(1)
            setName("")

            // eslint-disable-next-line eqeqeq
        } else if (referenciaSeleccion.current.value == 2) {
            setEstado(2)
        } else {
            setEstado(3)
        }

    }

    useEffect(() => {
        handlerSubmit()
    })

    return (
        <>
            <nav className="navbar navbar-dark bg-dark fixed-top">
                <div className="container-fluid">
                    <p className="navbar-brand">PokeAPI</p>
                    <button className="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                        <span className="navbar-toggler-icon"></span>
                    </button>
                    <div className="offcanvas offcanvas-end text-bg-dark" tabIndex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                        <div className="offcanvas-header">
                            <h5 className="offcanvas-title" id="offcanvasDarkNavbarLabel">Busca tus pokemons</h5>
                            <button type="button" className="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div className="offcanvas-body">
                            <ul className="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li className="nav-item dropdown contenedor" >
                                    <p className="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Filtros
                                    </p>
                                    <select ref={referenciaSeleccion} className="dropdown-menu dropdown-menu-dark select-filtros">
                                        <option value="1">Todos</option>
                                        <option value="2">Pokemon especifico</option>
                                        <option value="3">Por elemento</option>
                                    </select>
                                </li>
                            </ul>
                            <form className="d-flex mt-3" role="search">
                                <input className="form-control me-2"
                                    type="text"
                                    placeholder="Ingrese su Pokemon"
                                    value={name}
                                    onChange={handlerName}
                                    aria-label="Search"
                                    ref={controlInput} />
                            </form>
                            <div className="contenedor-categorias">
                                <div>
                                    <h5 style={{ marginTop: "10px" }}>Categorias posibles</h5>
                                </div>
                                <div className="categorias">
                                    <div>normal</div>
                                    <div>fighting</div>
                                    <div>flying</div>
                                    <div>poison</div>
                                    <div>ground</div>
                                    <div>rock</div>
                                    <div>bug</div>
                                    <div>ghost</div>
                                    <div>steel</div>
                                    <div>fire</div>
                                    <div>water</div>
                                    <div>grass</div>
                                    <div>electric</div>
                                    <div>psychic</div>
                                    <div>ice</div>
                                    <div>dragon</div>
                                    <div>dark</div>
                                    <div>fairy</div>
                                    <div>unknown</div>
                                    <div>shadow</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div>
                <Renderizado seleccion={estado} nombrePokemon={name} />
            </div>

        </>
    );
}

