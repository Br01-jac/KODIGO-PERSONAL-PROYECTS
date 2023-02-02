
import './App.css';
import Footer from './components/Footer';
import Principal from './components/Principal';
import { DataContextProvider } from './contexts/dataContext';


function App() {
  return (
    <div className="App">
      <DataContextProvider>
        <Principal />
        <Footer  />
      </DataContextProvider>
    </div>
  );
}

export default App;
