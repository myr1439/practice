import React from 'react'
import Navbar from '../component/Navbar'
import { Outlet } from 'react-router-dom'

export const Root = () => {
  return (
    <div>
        <Navbar/> 
        <Outlet/>
    </div>
  )
}
