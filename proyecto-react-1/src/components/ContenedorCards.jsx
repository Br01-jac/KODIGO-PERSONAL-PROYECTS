
import Card from './Card'

export default function ContenedorCards({ arregloPokemons }) {
  const handlerBackground = (e) => {
    const r = Math.floor(Math.random() * 256);
    const g = Math.floor(Math.random() * 256);
    const b = Math.floor(Math.random() * 256);

    const rgbColor = `rgb(${r},${g},${b})`;
    return rgbColor;
  }

  return (
    <>
      <div className="contenedor-cards">
        {arregloPokemons.map((el) => (
          <Card key={el.id} name={el.name} avatar={el.avatar} fondo={handlerBackground()} />
        ))}
      </div>
    </>
  )
}
