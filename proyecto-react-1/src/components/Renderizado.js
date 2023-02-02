import React, { useRef, useState, useContext } from 'react';
import axios from 'axios';
import ContenedorCards from './ContenedorCards';
import "../styles/renderizado.css"
import { DataContext } from '../contexts/dataContext';
export default function Prueba({ seleccion, nombrePokemon }) {

  const [pokemons, setPokemons] = useState([]);
  let estado = seleccion;
  let pokemonName = nombrePokemon.toLowerCase();
  let btnRef = useRef();
  const { setContextData } = useContext(DataContext)
  setContextData(pokemons.length);
  const Fetchapi = async () => {
    if (pokemons.length === 0) {
      let resp = await fetch("https://pokeapi.co/api/v2/pokemon/?offset=0&limit=100");
      let data = await resp.json();
      data.results.forEach(async (el) => {
        let res = await fetch(el.url),
          json = await res.json();
        let pokemon = {
          id: json.id,
          name: json.name,
          avatar: json.sprites.front_default,
        }
        setPokemons((pokemons) => [...pokemons, pokemon]);
      });
    } else {
      setPokemons([]);
    }

  }

  const PeticionAXIOS = (nom) => {
    if (pokemons.length === 0) {
      axios.get(`https://pokeapi.co/api/v2/pokemon/${nom}`)
        .then((response) => {
          let pokemon = {
            id: response.data.id,
            name: response.data.name,
            avatar: response.data.sprites.front_default,
          }
          setPokemons((pokemons) => [...pokemons, pokemon]);
        })
    } else {
      setPokemons([]);
    }

  }

  const FetchApiTipos = async (tipo) => {
    if (pokemons.length === 0) {
      let resp = await fetch(`https://pokeapi.co/api/v2/type/${tipo}`);
      let data = await resp.json();
      for (let i = 0; i < data.pokemon.length; i++) {
        let res = await fetch(data.pokemon[i].pokemon.url),
          json = await res.json();
        let pokemon = {
          id: json.id,
          name: json.name,
          avatar: json.sprites.front_default,
        }
        setPokemons((pokemons) => [...pokemons, pokemon]);
      }
    } else {
      setPokemons([]);
      //  setContextData(pokemons.length)
    }

  }

  const handlerSubmit = () => {
    if (pokemonName === "") {
      Fetchapi();
    } else if (pokemonName !== "" && estado === 3) {
      FetchApiTipos(pokemonName)
    }
    else {
      PeticionAXIOS(pokemonName);
    }
    if (btnRef.current.textContent === "Mostrar") {
      btnRef.current.textContent = "Ocutar";
    } else {
      btnRef.current.textContent = "Mostrar";
    }
    if (pokemons.length === 0) {
      setContextData(0)
    } else {
      setContextData(pokemons.length)
    }

  }
  return (
    <>
      <div className="contenedor">
        <button onClick={handlerSubmit} ref={btnRef}>Mostrar</button>
        <div className="contenedor-cards">
          <ContenedorCards arregloPokemons={pokemons} />
        </div>
      </div>
    </>
  )
}
