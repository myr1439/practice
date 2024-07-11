import React from 'react'
import { RouterProvider, createBrowserRouter } from 'react-router-dom'
import Home from './pages/Home'
import NotFound from './pages/NotFound'
import Videos from './pages/Videos'
import { Root } from './pages/Root'
import VideoDetail from './pages/VideoDetail'

function App() {
  const router=createBrowserRouter([
    {path:'/',element:<Root/>,errorElement:<NotFound/>,
      children:[
        {index:true,element:<Home/>}, //기본값으로 보여주고 싶은 페이지는 Home
        {path:'/Videos',element:<Videos/>},
        {path:'/Videos/:videoId',element:<VideoDetail/>}
      ]
    },
    
  ])
  return (
    <RouterProvider router={router}>
      <div>App</div>
    </RouterProvider>
  )
}

export default App