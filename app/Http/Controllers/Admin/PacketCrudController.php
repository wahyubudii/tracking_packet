<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PacketRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PacketCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PacketCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    private function getFieldsData($show = FALSE)
    {
        return [
            [
                'name' => 'packet_code',
                'label' => 'Kode Paket',
                'type' => 'text'
            ],
            [
                'name' => 'packet_name',
                'label' => 'Nama Paket',
                'type' => 'text'
            ],
            [
                'name' => 'description',
                'label' => 'Deskripsi',
                'type' => ($show ? "textarea" : 'ckeditor'),
            ],
            [
                'name' => 'sender',
                'label' => 'Pengirim',
                'type' => 'text',
            ],
            [
                'name' => 'receiver',
                'label' => 'Penerima',
                'type' => 'text',
            ],
            [
                'name' => 'source',
                'label' => 'Asal',
                'type' => 'text',
            ],
            [
                'name' => 'destination',
                'label' => 'Tujuan',
                'type' => 'text',
            ],
            [
                'name' => 'status',
                'label' => 'Status Paket',
                'type' => 'text',
            ],
            [    // Select2Multiple = n-n relationship (with pivot table)
                'label'     => "Ekspedisi",
                'type'      => ($show ? "select" : 'select2_multiple'),
                'name'      => 'ekspedisis', // the method that defines the relationship in your Model
                // optional
                'entity'    => 'ekspedisis', // the method that defines the relationship in your Model
                'model'     => "App\Models\Ekspedisi", // foreign key model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'pivot'     => true, // on create&update, do you need to add/delete pivot table entries?
            ],
            // [
            //     'label' => "Gambar Paket",
            //     'name' => "image",
            //     'type' => 'image',
            //     'crop' => true, // set to true to allow cropping, false to disable
            //     'aspect_ratio' => 1, // omit or set to 0 to allow any aspect ratio
            // ]
        ];
    }


    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Packet::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/packet');
        CRUD::setEntityNameStrings('packet', 'packets');

        $this->crud->addFields($this->getFieldsData());
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('id');
        CRUD::column('packet_code');
        CRUD::column('packet_name');
        CRUD::column('description');
        CRUD::column('sender');
        CRUD::column('receiver');
        CRUD::column('source');
        CRUD::column('destination');
        CRUD::column('status');
        CRUD::column('created_at');
        CRUD::column('updated_at');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(PacketRequest::class);

        CRUD::field('id');
        CRUD::field('packet_code');
        CRUD::field('packet_name');
        CRUD::field('description');
        CRUD::field('sender');
        CRUD::field('receiver');
        CRUD::field('source');
        CRUD::field('destination');
        CRUD::field('status');
        CRUD::field('created_at');
        CRUD::field('updated_at');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupShowOperation()
    {
        // by default the Show operation will try to show all columns in the db table,
        // but we can easily take over, and have full control of what columns are shown,
        // by changing this config for the Show operation
        $this->crud->set('show.setFromDb', false);
        $this->crud->addColumns($this->getFieldsData(TRUE));
    }
}
