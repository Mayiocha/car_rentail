import { BrowserRouter, Routes, Route } from 'react-router-dom'
import Dashboard from './views/Dashboard'
import Contacto from './views/Contacto'
import './App.css'

function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<Dashboard />} />
        <Route path="/contacto" element={<Contacto />} />
      </Routes>
    </BrowserRouter>
  )
}

export default App


