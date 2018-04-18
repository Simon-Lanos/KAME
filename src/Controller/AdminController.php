<?php

namespace App\Controller;

/*************************
/*  ALEXIS & MARC-ALBAN  *
/*************************/

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index()
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/addEquipment", name="admin_addEquipment")
     */
    public function AddEquipment() {
        return $this->render('admin/addEquipment.html.twig', [
            'controller_name' => 'Ajouter un équipement',
        ]);
    }

    /**
     * @Route("/admin/updateEquipment", name="admin_updateEquipment")
     */
    public function UpdateEquipment() {
        return $this->render('admin/updateEquipment.html.twig', [
            'controller_name' => 'Modifier un équipement',
        ]);
    }

    /**
     * @Route("/admin/addStudent", name="admin_addStudent")
     */
    public function AddStudent() {
        return $this->render('admin/addStudent.html.twig', [
            'controller_name' => 'Ajouter un étudiant',
        ]);
    }

    /**
     * @Route("/admin/updateStudent", name="admin_updateStudent")
     */
    public function UpdateStudent() {
        return $this->render('admin/updateStudent.html.twig', [
            'controller_name' => 'Modifier un étudiant',
        ]);
    }

    /**
     * @Route("/admin/addTeacher", name="admin_addTeacher")
     */
    public function AddTeacher() {
        return $this->render('admin/addTeacher.html.twig', [
            'controller_name' => 'Ajouter un intervenant',
        ]);
    }

    /**
     * @Route("/admin/updateTeacher", name="admin_updateTeacher")
     */
    public function UpdateTeacher() {
        return $this->render('admin/updateTeacher.html.twig', [
            'controller_name' => 'Modifier un intervenant',
        ]);
    }

    /**
     * @Route("/admin/addGroup", name="admin_addGroup")
     */
    public function AddGroup() {
        return $this->render('admin/addGroup.html.twig', [
            'controller_name' => 'Ajouter un groupe',
        ]);
    }

    /**
     * @Route("/admin/updateGroup", name="admin_updateGroup")
     */
    public function UpdateGroup() {
        return $this->render('admin/updateGroup.html.twig', [
            'controller_name' => 'Modifier un groupe',
        ]);
    }

    /**
     * @Route("/admin/addProms", name="admin_addProms")
     */
    public function AddProms() {
        return $this->render('admin/addProms.html.twig', [
            'controller_name' => 'Ajouter une promotion',
        ]);
    }

    /**
     * @Route("/admin/updateProms", name="admin_updateProms")
     */
    public function UpdateProms() {
        return $this->render('admin/updateProms.html.twig', [
            'controller_name' => 'Modifier une promotion',
        ]);
    }
}
